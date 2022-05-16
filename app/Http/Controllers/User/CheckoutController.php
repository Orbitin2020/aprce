<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Veritrans\Midtrans;
use App\Models\Tiket;
use App\Models\Pendaftar;
use App\Models\Transaction;
// use Mail;
use Illuminate\Support\Facades\Mail;
use Validator;

class CheckoutController extends Controller
{
    public function __construct()
    {   
        // Production
        // Midtrans::$serverKey = 'Mid-server-J61X_k8ons-cqRbjMO-2K9m-';
        // Midtrans::$isProduction = true;

        // Development       
        Midtrans::$serverKey = 'Mid-server-J61X_k8ons-cqRbjMO-2K9m-';
        Midtrans::$isProduction = true;
    }

    public function snap()
    {
        return view('snap_token');
    }

    public function token(Request $request)
    {
        $data = $request->all();
        // $validator = Validator::make($request->all(), [
        //     ''
        // ]);
        debugbar()->info($data);

        $tiket = Tiket::where('id', $data['tiket_id'])->first();

        $qty = $data['quantity'];
        $dollar = 14000;
        $harga = $tiket['harga'] * $dollar;

        error_log('masuk ke snap token dri ajax');
        $midtrans = new Midtrans;

        $transaction_details = array(
            'order_id'      => uniqid(),
            'gross_amount'  => $harga * $qty
        );

        // Populate items
        $items = [
            array(
                'id'        => 'item1',
                'price'     => $harga,
                'quantity'  => $qty,
                'name'      => $tiket['nama'],
            ),
            // array(
            //     'id'        => 'item2',
            //     'price'     => 50000,
            //     'quantity'  => 2,
            //     'name'      => 'Nike N90'
            // )
        ];

        // Populate customer's billing address
        // $billing_address = array(
        //     'first_name'    => "Andri",
        //     'last_name'     => "Setiawan",
        //     'address'       => "Karet Belakang 15A, Setiabudi.",
        //     'city'          => "Jakarta",
        //     'postal_code'   => "51161",
        //     'phone'         => "081322311801",
        //     'country_code'  => 'IDN'
        //     );

        // Populate customer's shipping address
        // $shipping_address = array(
        //     'first_name'    => "John",
        //     'last_name'     => "Watson",
        //     'address'       => "Bakerstreet 221B.",
        //     'city'          => "Jakarta",
        //     'postal_code'   => "51162",
        //     'phone'         => "081322311801",
        //     'country_code'  => 'IDN'
        //     );

        // Populate customer's Info
        $customer_details = array(
            'first_name'      => $data['firstName'],
            'last_name'       => $data['lastName'],
            'email'           => $data['email'],
            'phone'           => $data['noHp'],
            // 'billing_address' => $billing_address,
            // 'shipping_address'=> $shipping_address
            );

        // Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit'       => 'hour', 
            'duration'   => 1
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $items,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );
    
        try
        {
            $snap_token = $midtrans->getSnapToken($transaction_data);
            //return redirect($vtweb_url);
            echo $snap_token;
        } 
        catch (Exception $e) 
        {   
            return $e->getMessage;
        }
    }

    public function finish(Request $request)
    {
        $data = $request->all();
        // $result = $request->input('result_data');

        $result = json_decode($request->input('result_data'), true);
        $tiket = Tiket::where('id', $data['tiket_id'])->first();
        $tiket->limit   = $tiket->limit - $data['quantity'];
        $tiket->save();
        
        $paymentType = $result['payment_type'];

        if(!$paymentType) {
            return redirect()->route('user.index');
        } else if($paymentType == 'echannel') {
            $email_data = array(
                'nm_tiket' => $tiket['nama'],
                'kategori' => $tiket['kategori'],
                'participant' => $tiket['participant'],
                'quantity' => $tiket['quantity'],
                'order_id' => $result['order_id'],
                'gross_amount' => $result['gross_amount'],
                'va_number' => $result['bill_key'],
                'namaLengkap' => $data['firstName']. ' ' . $data['lastName'],
                'email' => $data['email'],
                'nohp' => $data['nohp'],
                'quantity' => $data['quantity'],
                'tiket_id' => $tiket['nama'],
                'harga_tiket' => $tiket['harga'] * 14000,
                'transaction_time' => $result['transaction_time'],
                'payment_type' => $result['payment_type'],
            );

            $transaction = Transaction::create([
                'order_id' => $result['order_id'],
                'gross_amount' => $result['gross_amount'],
                'payment_type' => 'bank_mandiri',
                'transaction_time' => $result['transaction_time'],
                'transaction_status' => $result['transaction_status'],
                'va_number' => $result['bill_key'],
                'pdf_url' => $result['pdf_url'],
                'status_code' => $result['status_code'],
            ]);

            Pendaftar::create([
                'nama' => $data['firstName'],
                'email' => $data['email'],
                'nohp' => $data['nohp'],
                'quantity' => $data['quantity'],
                'tiket_id' => $data['tiket_id'],
                'transaction_id' => $transaction->id_transaction,
            ]);
            
            Mail::send('user.mail.regist_mail', $email_data, function ($message) use ($email_data) {
                $message->to('fazrilramadhan2000@gmail.com', 'Orbitin ID')
                    ->subject('New Registran')
                    ->from('coxford200012@gmail.com', 'Aprindo');
            });
            Mail::send('user.mail.regist_admin', $email_data, function ($message) use ($email_data) {
                $message->to('coxford200012@gmail.com', 'Orbitin ID')
                    ->subject('New Registran')
                    ->from('coxford200012@gmail.com', 'Aprindo');
            });

            return $this->done($email_data);
        } else if($result['permata_va_number'] == true) {
            $email_data = array(
                'nm_tiket' => $tiket['nama'],
                'kategori' => $tiket['kategori'],
                'participant' => $tiket['participant'],
                'quantity' => $tiket['quantity'],
                'order_id' => $result['order_id'],
                'gross_amount' => $result['gross_amount'],
                'va_number' => $result['permata_va_number'],
                'namaLengkap' => $data['firstName']. ' ' . $data['lastName'],
                'email' => $data['email'],
                'nohp' => $data['nohp'],
                'quantity' => $data['quantity'],
                'tiket_id' => $tiket['nama'],
                'harga_tiket' => $tiket['harga'] * 14000,
                'transaction_time' => $result['transaction_time'],
                'payment_type' => $result['payment_type'],
            );

            $transaction = Transaction::create([
                'order_id' => $result['order_id'],
                'gross_amount' => $result['gross_amount'],
                'payment_type' => $result['payment_type'],
                'transaction_time' => $result['transaction_time'],
                'transaction_status' => $result['transaction_status'],
                'va_number' => $result['permata_va_number'],
                'pdf_url' => $result['pdf_url'],
                'status_code' => $result['status_code'],
            ]);
            Pendaftar::create([
                'nama' => $data['firstName'],
                'email' => $data['email'],
                'nohp' => $data['nohp'],
                'quantity' => $data['quantity'],
                'tiket_id' => $data['tiket_id'],
                'transaction_id' => $transaction->id_transaction,
            ]);
            
            Mail::send('user.mail.regist_mail', $email_data, function ($message) use ($email_data) {
                $message->to('fazrilramadhan2000@gmail.com', 'Orbitin ID')
                    ->subject('New Registran')
                    ->from('coxford200012@gmail.com', 'Aprindo');
            });

            return $this->done($email_data);
        } else if($paymentType == 'bank_transfer' && !$result['permata_va_number']) {
            $email_data = array(
                'nm_tiket' => $tiket['nama'],
                'kategori' => $tiket['kategori'],
                'participant' => $tiket['participant'],
                'quantity' => $tiket['quantity'],
                'order_id' => $result['order_id'],
                'gross_amount' => $result['gross_amount'],
                'va_number' => $result['va_numbers'][0]['va_number'],
                'namaLengkap' => $data['firstName']. ' ' . $data['lastName'],
                'email' => $data['email'],
                'nohp' => $data['nohp'],
                'quantity' => $data['quantity'],
                'tiket_id' => $tiket['nama'],
                'harga_tiket' => $tiket['harga'] * 14000,
                'transaction_time' => $result['transaction_time'],
                'payment_type' => $result['payment_type'],
            );

            $transaction = Transaction::create([
                'order_id' => $result['order_id'],
                'gross_amount' => $result['gross_amount'],
                'payment_type' => $result['payment_type'],
                'transaction_time' => $result['transaction_time'],
                'transaction_status' => $result['transaction_status'],
                'va_number' => $result['va_numbers'][0]['va_number'],
                'pdf_url' => $result['pdf_url'],
                'status_code' => $result['status_code'],
            ]);
            Pendaftar::create([
                'nama' => $data['firstName'],
                'email' => $data['email'],
                'nohp' => $data['nohp'],
                'quantity' => $data['quantity'],
                'tiket_id' => $data['tiket_id'],
                'transaction_id' => $transaction->id_transaction,
            ]);
            
            Mail::send('user.mail.regist_mail', $email_data, function ($message) use ($email_data) {
                $message->to('fazrilramadhan2000@gmail.com', 'Orbitin ID')
                    ->subject('New Registran')
                    ->from('coxford200012@gmail.com', 'Aprindo');
            });

            return $this->done($email_data);
        } else if($paymentType == 'gopay') {
            $email_data = array(
                'nm_tiket' => $tiket['nama'],
                'kategori' => $tiket['kategori'],
                'participant' => $tiket['participant'],
                'quantity' => $tiket['quantity'],
                'order_id' => $result['order_id'],
                'gross_amount' => $result['gross_amount'],
                'va_number' => $result['va_numbers'][0]['va_number'],
                'namaLengkap' => $data['firstName']. ' ' . $data['lastName'],
                'email' => $data['email'],
                'nohp' => $data['nohp'],
                'quantity' => $data['quantity'],
                'tiket_id' => $tiket['nama'],
                'harga_tiket' => $tiket['harga'] * 14000,
                'transaction_time' => $result['transaction_time'],
                'payment_type' => $result['payment_type'],
            );

            $transaction = Transaction::create([
                'order_id' => $result['order_id'],
                'gross_amount' => $result['gross_amount'],
                'payment_type' => $result['payment_type'],
                'transaction_time' => $result['transaction_time'],
                'transaction_status' => $result['transaction_status'],
                // 'va_number' => ,
                'pdf_url' => $result['pdf_url'],
                'status_code' => $result['status_code'],
            ]);
            Pendaftar::create([
                'nama' => $data['firstName'],
                'email' => $data['email'],
                'nohp' => $data['nohp'],
                'quantity' => $data['quantity'],
                'tiket_id' => $data['tiket_id'],
                'transaction_id' => $transaction->id_transaction,
            ]);
            
            Mail::send('user.mail.regist_mail', $email_data, function ($message) use ($email_data) {
                $message->to('fazrilramadhan2000@gmail.com', 'Orbitin ID')
                    ->subject('New Registran')
                    ->from('coxford200012@gmail.com', 'Aprindo');
            });

            return $this->done($email_data);
        }        
    }

    public function done($data) 
    {
        $result = $data; 
        $title = 'Hasil Transaction';
        $judul = 'Detail Transaction';
        // debugbar()->info($result);
        return view('user.hasilTransaction', compact('title', 'judul', 'result'));
    }

    public function notification()
    {
        $midtrans = new Midtrans;
        echo 'test notification handler';
        $json_result = file_get_contents('php://input');
        $result = json_decode($json_result);

        if($result){
            $notif = $midtrans->status($result->order_id);
        }

        error_log(print_r($result,TRUE));
    }
}  
