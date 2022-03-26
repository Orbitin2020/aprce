<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Schedule_speaker;
use App\Models\Speaker;
use DataTables;
use File;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.schedule.index');
    }

    public function getData(Request $request)
    {
        // $schedule = Schedule::with('speaker')->latest()->get();
        // dd($schedule[0]->speaker);

        if ($request->ajax()) {
            $schedule = Schedule::with('speaker')->latest()->get();
            return Datatables::of($schedule)
                ->addIndexColumn()
                ->addColumn('created_at', function ($schedule) {

                    return date('d-m-Y', strtotime($schedule->created_at));
                })
                ->addColumn('speaker', function ($schedule) {
                    if ($schedule != null) {
                        $data = array();
                        foreach($schedule->speaker as $d)
                        {
                            $data[] = $d->speakName;
                            $fx[] = "<ul><li><b>" . $d->speakName . "</b></li></ul>";
                        }
                        $string = implode("", $fx);
                        return $string;
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

    public function getSpeaker()
    {
        $speak = Speaker::all();
        return response()->json([
            'message' => 'List Speaker',
            'data'    => $speak
        ]);
    }

    public function store(Request $request)
    {
        
        $schedule = new Schedule;
       
        $schedule->agenda = $request->agenda;
        $schedule->description = $request->description;
        $schedule->tgl_mulai = $request->tgl_mulai;
        $schedule->tgl_akhir = $request->tgl_akhir;
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
        return response()->json([
            'message' => 'Edit speaker',
            'data' => $schedule,
            'speaker' => $speaker
            
        ]);
    }

    public function update(Request $request, $id)
    {
        $schedule = Schedule::find($id);
       
        $schedule->agenda = $request->agenda;
        $schedule->description = $request->description;
        $schedule->tgl_mulai = $request->tgl_mulai;
        $schedule->tgl_akhir = $request->tgl_akhir;
        $schedule->speaker()->sync($request->speaker);
        return response()->json([
            'message' => 'Schedule berhasil di Update',
        ],200);
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
}
