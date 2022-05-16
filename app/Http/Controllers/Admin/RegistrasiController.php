<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendaftar;
use App\Models\Tiket;
use Auth;
use DataTables;
use Validator;

class RegistrasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tiket = Tiket::get();
        return view('admin.registrasi.index', compact('tiket'));
    }

    public function getData()
    {
        $query = Pendaftar::with(['transaction'])->get();
        return DataTables::of($query) 
            ->addIndexColumn()
            // ->addColumn('Actions', function($query) {
            //     $html = '<button href="javascript:void(0)" data-id="' . $query->id_pendaftar . '" id="editRegistrasi" type="button" class="detail btn btn-warning btn-sm m-1" tittle="detail"><i class="fa fa-edit" ></i></button><button href="javascript:void(0)" data-id="' . $query->id_pendaftar . '" id="deleteTransaction" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';
            //     return $html;
            // })
            // ->rawColumns(['Actions'])
            ->make(true);
    }

    public function getEdit($id) 
    {
        $data = Pendaftar::where('id_pendaftar', $id)->first();
        return $data;
    }

    public function add(Request $request)
    {
        $data = $request->all();
        $message = [
            'nama.required' => 'Nama tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'email.required' => 'Emamil tidak boleh kosong',
            'nohp.required' => 'Nomor ho tidak boleh kosong',
            'quantity' => 'Quantity tidak boleh kosong',
        ];

        $validator = Validator::make($data, [
            'nama' => 'required',
            'email' => 'required|unique:pendaftar.email',
            'nohp' => 'required',
            'quantity' => 'required'
        ], $message);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal mengupdate data kategori'
            ]);
        } else {
            // Pendaftar::create([
            //     'nama' =
            // ])
        }


    }

    public function update(Request $request, $id) 
    {
        $pendaftar = Pendaftar::where('id_pendaftar', $id)->first();
        $pendaftar->nama    = $request->nama;
        $pendaftar->email   = $request->email;
        $pendaftar->nohp    = $request->nohp;
        $pendaftar->quantity= $request->quantity;
        $pendaftar->save();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil mengupdate Data Tersebut'
        ]);
    }
}
