<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Veritrans\Midtrans;
use App\Models\Tiket;
use App\Models\Pendaftar;
use App\Models\Transaction;
use Mail;

class CheckoutController extends Controller
{
    public function __construct()
    {   
        Midtrans::$serverKey = 'SB-Mid-server-rsgj0LM_eZRsZEiL08tgq9b6';
        //set is production to true for production mode
        Midtrans::$isProduction = false;
    }

    public function snap()
    {
        return view('snap_token');
    }

    public function token(Request $request)
    {
        $data = $request->all();
        // debugbar()->info($data);
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
            'duration'   => 24
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
        debugbar()->info($result);

        var_dump('Hello');
        $paymentType = $result['payment_type'];

        if(!$paymentType) {
            echo 'Gagal';
        } else if($paymentType == 'echannel') {
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
        } else if($paymentType == 'bank_transfer') {
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
        } else if($paymentType == 'cstore') {
            $transaction = Transaction::create([
                'order_id' => $result['order_id'],
                'gross_amount' => $result['gross_amount'],
                'payment_type' => $result['payment_type'],
                'transaction_time' => $result['transaction_time'],
                'transaction_status' => $result['transaction_status'],
                'va_number' => $result['payment_code'],
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
        } else if($paymentType == 'qris') {
            $transaction = Transaction::create([
                'order_id' => $result['order_id'],
                'gross_amount' => $result['gross_amount'],
                'payment_type' => 'shopeePay',
                'transaction_time' => $result['transaction_time'],
                'transaction_status' => $result['transaction_status'],
                'va_number' => 'Via Barcode',
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
        } else if($paymentType == 'gopay') {
            $transaction = Transaction::create([
                'order_id' => $result['order_id'],
                'gross_amount' => $result['gross_amount'],
                'payment_type' => 'gopay',
                'transaction_time' => $result['transaction_time'],
                'transaction_status' => $result['transaction_status'],
                'va_number' => 'Via Barcode',
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
        }
        
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
