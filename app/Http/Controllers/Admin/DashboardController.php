<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Speaker;
use App\Models\Tiket;
use App\Models\Sponsor;

class DashboardController extends Controller
{
    public function index() 
    {
        $countSchedule = Schedule::count();
        $countSpeaker = Speaker::count();
        $countTiket = Tiket::count();
        $countSponsor = Sponsor::count();
        return view('admin.dashboard.index', compact('countSchedule', 'countSpeaker', 'countTiket', 'countSponsor'));
    }

}
