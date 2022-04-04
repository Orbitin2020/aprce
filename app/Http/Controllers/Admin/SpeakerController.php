<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Speaker;
use DataTables;
use File;
use Image;

class SpeakerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.speaker.index');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $speaker = Speaker::select('*');
            return Datatables::of($speaker)
                ->addIndexColumn()
                ->addColumn('created_at', function ($speaker) {

                    return date('d-m-Y', strtotime($speaker->created_at));
                })
                ->addColumn('speakFoto', function ($speaker) {
                    $url = asset('uploads/speaker/'.$speaker->speakFoto);
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
                ->rawColumns(['speakFoto','action'])
                ->make(true);
        }
    }

    public function store(Request $request)
    {
        $gambar = $request->file('foto');
        $extension = $gambar->getClientOriginalExtension();
        $name = $request->input('nama').'.'.$extension;
        $path = public_path().'/uploads/speaker';

        if($request->prioritas == 1)
        {
            $upload = $gambar->move($path,$name);
        }else{
            $img = Image::make($gambar->path());

            $img->resize(370, 370, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path.'/'.$name);
        }

      

        $speaker = new Speaker;
        $speaker->speakName = $request->nama;
        $speaker->speakDesc = $request->deskripsi;
        $speaker->speakJob = $request->jabatan;
        $speaker->speakkategori = $request->kategori;
        $speaker->speakPrioritas = $request->prioritas;
        $speaker->speakFoto = $name;
        $speaker->save();
        return response()->json([
            'message' => 'Speaker Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $speaker = Speaker::find($id);
        return response()->json([
            'message' => 'Edit speaker',
            'data' => $speaker,
            'foto' => $speaker->speakFoto
        ]);
    }

    public function update(Request $request, $id)
    {
        if (request()->hasFile('foto') && request('foto') != '') {
            $speaker = Speaker::findOrFail($id);
            $path = public_path("\uploads\speaker\\") .$speaker->speakFoto;
            if(File::exists($path)) {
                File::delete($path);
            }
            $gambar = $request->file('foto');
            $extension = $gambar->getClientOriginalExtension();
            $name = $request->input('nama').'.'.$extension;
            $path = public_path().'/uploads/speaker';
            // $upload = $gambar->move($path,$name);

            if($request->prioritas == 1)
            {
                $upload = $gambar->move($path,$name);
            }else{
                $img = Image::make($gambar->path());

                $img->resize(370, 370, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($path.'/'.$name);
            }
            

            $speaker = Speaker::find($id);
            $speaker->speakName = $request->nama;
            $speaker->speakDesc = $request->deskripsi;
            $speaker->speakJob = $request->jabatan;
            $speaker->speakFoto = $name;
            $speaker->speakkategori = $request->kategori;
            $speaker->speakPrioritas = $request->prioritas;
            $speaker->save();
        }else{
            $speaker = Speaker::find($id);
            $speaker->speakName = $request->nama;
            $speaker->speakDesc = $request->deskripsi;
            $speaker->speakJob = $request->jabatan;
            $speaker->speakkategori = $request->kategori;
            $speaker->speakPrioritas = $request->prioritas;
            $speaker->save();
        }
        return response()->json([
            'message' => 'speakkategori Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
        $speaker = Speaker::findOrFail($id);
        $path = public_path("\uploads\speaker\\") .$speaker->speakFoto;
        
        if(File::exists($path)) {
            File::delete($path);
            $speaker->delete();
        }else{
            $speaker->delete();
            if($speaker)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'speaker Berhasil Di Hapus',
                ]);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'speaker Gagal Di Hapus'
                ]);
            }
        }
       
    }
}
