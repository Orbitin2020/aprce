<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendaftar;

class PendaftarController extends Controller
{
    public function index()
    {
        return view('user.pendaftaran.index');
    }
    public function store(Request $request)
    {
        $pendaftar = new Pendaftar;
        $pendaftar->nama = $request->nama;
        $pendaftar->email = $request->email;
        $pendaftar->nohp = $request->nohp;
        $pendaftar->save();
        return response()->json([
            'message' => 'Pendaftar berhasi dikirim'
        ], 200);
    }
}
