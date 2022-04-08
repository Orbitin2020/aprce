<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sponsor;
use DataTables;
use File;

class SponsorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.sponsor.index');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $sponsor = Sponsor::select('*');
            return Datatables::of($sponsor)
                ->addIndexColumn()
                ->addColumn('created_at', function ($sponsor) {

                    return date('d-m-Y', strtotime($sponsor->created_at));
                })
                ->addColumn('gambar', function ($sponsor) {
                    $url = asset('uploads/sponsor/'.$sponsor->gambar);
                    $img = '';
                    $img = $img . '<img src="' . $url . '" class="p-0 img-fluid img-thumb" >';
                    return $img;
                })
                ->addColumn('action', function ($row) {
                    $btn = '';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';
    
                    return $btn;
                })
                ->rawColumns(['action','gambar'])
                ->make(true);
        }
    }

    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        $extension = $gambar->getClientOriginalExtension();
        $name = $request->input('nama').'.'.$extension;
        $path = public_path().'/uploads/sponsor';
        $upload = $gambar->move($path,$name);

        $sponsor = new Sponsor;
        $sponsor->nama = $request->nama;
        $sponsor->gambar = $name;
        $sponsor->save();
        return response()->json([
            'message' => 'Sponsor Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $sponsor = Sponsor::find($id);
        return response()->json([
            'message' => 'Edit Sponsor',
            'data' => $sponsor,
        ]);
    }

    public function update(Request $request, $id)
    {
       
        if (request()->hasFile('gambar') && request('gambar') != '') {
            $sponsor = Sponsor::findOrFail($id);
            $path = public_path("\uploads\sponsor\\") .$sponsor->gambar;
            if(File::exists($path)) {
                File::delete($path);
            }
            $gambar = $request->file('gambar');
            $extension = $gambar->getClientOriginalExtension();
            $name = $request->input('nama').'.'.$extension;
            $path = public_path().'/uploads/sponsor';
            $upload = $gambar->move($path,$name);

            $sponsor = Sponsor::find($id);
            $sponsor->nama = $request->nama;
            $sponsor->gambar = $name;
            $sponsor->save();
        }else{
            $sponsor = Sponsor::find($id);
            $sponsor->nama = $request->nama;
            $sponsor->save();
        }
        return response()->json([
            'message' => 'Sponsor Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $path = public_path("\uploads\sponsor\\") .$sponsor->gambar;
        
        if(File::exists($path)) {
            File::delete($path);
            $sponsor->delete();
        }else{
            $sponsor->delete();
            if($sponsor)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Sponsor Berhasil Di Hapus',
                ]);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Sponsor Gagal Di Hapus'
                ]);
            }
        }
       
    }
}
