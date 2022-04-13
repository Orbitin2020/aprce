<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendaftar;
use App\Models\Tiket;
use Illuminate\Support\Facades\Mail;

class PendaftarController extends Controller
{
    public function index()
    {
        return view('user.pendaftaran.index');
    }

    public function getTiket($tiket)
    {
        $data = Tiket::where('id',$tiket)->first();
        return $data;
    }

    public function store(Request $request)
    {
        $pendaftar = new Pendaftar;
        $pendaftar->nama = $request->nama;
        $pendaftar->email = $request->email;
        $pendaftar->nohp = $request->nohp;
        $pendaftar->quantity = $request->quantity;
        $pendaftar->tiket_id = $request->tiket;
        $pendaftar->save();

        $data_tiket = $this->getTiket($request->tiket);
        // email data
        $email_data = array(
            'name' => $request->nama,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'quantity' => $request->quantity,
            'tiket_id' => $data_tiket->nama,
            
        );
        
        Mail::send('user.mail.regist_mail', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'], $email_data['name'])
                ->subject('Welcome to Fikri Haidar')
                ->from('fikrihaidar24@gmail.com', 'Fikri Haidar');
        });
        
        return response()->json([
            'message' => 'Pendaftar berhasi dikirim',
            'data'    => $email_data
        ], 200);
    }

    

}
