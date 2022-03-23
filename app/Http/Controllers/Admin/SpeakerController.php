<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function getData()
    {
        // return view
    }

    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        $extension = $gambar->getClientOriginalExtension();
        $name = $request->input('name').'.'.$extension;
        $path = public_path().'/img/speaker';

        $speaker = new Speaker;
        $speaker->speakName = $speaker->name;
        $speaker->speakDesc = $speaker->description;
        $speaker->speakJob = $speaker->job;
        $speaker->save();
    }

    public function edit(Request $request,$id)
    {
        $speaker = Speaker::find($id);
        return respons()->json();
    }

    public function update(Request $request,$id)
    {
        $speaker = Speaker::find($id);
        return respons()->json();
    }

    public function delete($id)
    {
        $speaker = Speaker::findOrFail($id);
        $speaker->delete();
        return respons()->json();
    }
}
