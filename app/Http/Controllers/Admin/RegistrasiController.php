<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendaftar;
class RegistrasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.registrasi.index');
    }

    public function getData(Request $request)
    {
        // $schedule = Schedule::with('speaker')->latest()->get();
        // dd($schedule[0]->speaker);

        if ($request->ajax()) {
            $regist = Pendaftar::with('tiket')->latest()->get();
            return Datatables::of($regist)
                ->addIndexColumn()
                ->addColumn('created_at', function ($regist) {

                    return date('d-m-Y', strtotime($regist->created_at));
                })
                ->addColumn('tiket', function ($regist) {
                    if ($regist->tiket_id != null) {
                        return $regist->tiket->nama;
                    }
                })

                ->addColumn('action', function ($row) {
                    $btn = '';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';
    
                    return $btn;
                })
                ->rawColumns(['speaker','action'])
                ->make(true);
        }
    }
}
