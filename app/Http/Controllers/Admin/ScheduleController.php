<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Schedule_speaker;
use App\Models\Speaker;
use App\Models\Tiket;
use DataTables;
use Validator;
use File;
use Str;
use Image;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tiket = Tiket::get();
        return view('admin.schedule.index', compact('tiket'));
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $schedule = Schedule::with('speaker', 'tiket')->latest()->get();
            return Datatables::of($schedule)
                ->addIndexColumn()
                ->addColumn('speaker', function ($schedule) {
                    if ($schedule != null) {
                        $data = array();
                        $fx = array();
                        foreach($schedule->speaker as $d)
                        {
                            $data[] = $d->speakName;
                            $fx[] = "<ul><li><b>" . $d->speakName . "</b></li></ul>";
                        }
                        $string = implode("", $fx);
                        return $string;
                    }
                })
                ->addColumn('description', function($schedule) {
                    return strip_tags(Str::limit($schedule->description, 200));
                })
                ->addColumn('action', function ($row) {
                    $btn = '';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="detailSchedule" type="button" class="edit btn btn-info btn-sm m-1" tittle="Detail"><i class="fa fa-eye" ></i></button>';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-warning btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                    $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';
    
                    return $btn;
                })
                ->addColumn('tiket', function($schedule) {
                    return $schedule['tiket']['nama'];
                })
                ->rawColumns(['speaker','action', 'tiket'])
                ->make(true);
        }
    }

    public function getSpeaker()
    {
        $speak = Speaker::all();
        $tiket = Tiket::all();
        return response()->json([
            'message' => 'List Speaker',
            'data'    => $speak,
            'tiket'   => $tiket,
        ]);
    }

    public function getTiket() 
    {
        $tiket = Tiket::get();
        return response()->json([
            'message' => 'List Tiket',
            'data' => $tiket
        ]);
    }

    public function store(Request $request)
    {
        $random = Str::random(10);
        $gambar = $request->file('foto');
        $extension = $gambar->getClientOriginalExtension();
        $name = $random.'.'.$extension;
        $path = public_path() . '/uploads/schedule';
        $img = Image::make($gambar->path());
        $img->resize(1000, 585, function($constraint) {
            $constraint->aspectRatio();
        })->save($path. '/'. $name);

        $schedule = new Schedule;
       
        $schedule->agenda    = $request->agenda;
        $schedule->description = $request->description;
        $schedule->tgl_mulai = $request->tgl_mulai;
        $schedule->tgl_akhir = $request->tgl_akhir;
        $schedule->image     = $name;
        $schedule->tiket_id  = $request->tiket;
        $schedule->save();
        $schedule->speaker()->attach($request->speaker);
        return response()->json([
            'message' => 'Schedule berhasil ditambah',
        ],200);
    }

    public function edit($id)
    {
        $speaker = Speaker::all();
        $schedule = Schedule::find($id);
        $tiket = Tiket::all();
        return response()->json([
            'message' => 'Edit speaker',
            'data' => $schedule,
            'speaker' => $speaker,
            'tiket' => $tiket,
        ]);
    }

    public function update(Request $request, $id)
    {
        $random = Str::random(10);
        $gambar = $request->file('foto');

        if(!$gambar) {
            $schedule = Schedule::find($id);

            $schedule->agenda = $request->agenda;
            $schedule->description = $request->description;
            $schedule->tgl_mulai = $request->tgl_mulai;
            $schedule->tgl_akhir = $request->tgl_akhir;
            $schedule->tiket_id  = $request->tiket;
            // $schedule->image     = $name;
            $schedule->speaker()->sync($request->speaker);
            $schedule->save();
            return response()->json([
                'message' => 'Schedule berhasil di Update',
            ],200);
        } else {
            $extension = $gambar->getClientOriginalExtension();
            $name = $random.'.'.$extension;
            $path = public_path() . '/uploads/schedule';
            $img = Image::make($gambar->path());
            $img->resize(1000, 585, function($constraint) {
                $constraint->aspectRatio();
            })->save($path. '/'. $name);

            $schedule = Schedule::find($id);
        
            $schedule->agenda = $request->agenda;
            $schedule->description = $request->description;
            $schedule->tgl_mulai = $request->tgl_mulai;
            $schedule->tgl_akhir = $request->tgl_akhir;
            $schedule->tiket_id  = $request->tiket;
            $schedule->image     = $name;
            $schedule->speaker()->sync($request->speaker);
            $schedule->save();
            return response()->json([
                'message' => 'Schedule berhasil di Update',
            ],200);
        }
    }

    public function delete($id)
    {
        $speaker = Schedule::findOrFail($id);
        $speaker->delete();
        return response()->json([
            'success' => false,
            'message' => 'speaker Gagal Di Hapus'
        ]);
    }
    
    public function detail($id) 
    {
        $result = Schedule::with('speaker', 'tiket')->where('id', $id)->first();
        return $result;
    }
}
