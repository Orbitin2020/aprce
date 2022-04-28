<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tiket;
use DataTables;

class TiketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.tiket.index');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $tiket = Tiket::select('*');
            return Datatables::of($tiket)
                ->addIndexColumn()
                ->addColumn('created_at', function ($tiket) {

                    return date('d-m-Y', strtotime($tiket->created_at));
                })
                ->addColumn('action', function ($row) {
                    $btn = '';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';
    
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function store(Request $request)
    {
        $tiket = new Tiket;
        $tiket->harga = $request->harga;
        $tiket->nama = $request->nama;
        $tiket->kategori = $request->kategori;
        $tiket->participant = $request->participant;
        $tiket->limit = $request->limit;
        $tiket->save();
        return response()->json([
            'message' => 'Tiket Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $tiket = Tiket::find($id);
        return response()->json([
            'message' => 'Edit tiket',
            'data' => $tiket,
        ]);
    }

    public function update(Request $request, $id)
    {
       
        $tiket = Tiket::find($id);
        $tiket->harga = $request->harga;
        $tiket->nama = $request->nama;
        $tiket->kategori = $request->kategori;
        $tiket->participant = $request->participant;
        $tiket->save();
        return response()->json([
            'message' => 'Tiket Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();
        return response()->json([
            'success' => true,
            'message' => 'Tiket Berhasil Di Hapus',
        ]);
       
    }
}
