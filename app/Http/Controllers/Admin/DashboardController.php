<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Speaker;
use App\Models\Tiket;
use App\Models\Sponsor;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index() 
    {
        $year = date('Y');
        $countSchedule = Schedule::count();
        $countSpeaker = Speaker::count();
        $countTiket = Tiket::count();
        $countSponsor = Sponsor::count();

        $jan = Transaction::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', $year)->whereMonth('created_at', '01')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $feb = Transaction::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', $year)->whereMonth('created_at', '02')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $mar = Transaction::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', $year)->whereMonth('created_at', '03')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $apr = Transaction::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', $year)->whereMonth('created_at', '04')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $mei = Transaction::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', $year)->whereMonth('created_at', '05')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $jun = Transaction::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', $year)->whereMonth('created_at', '06')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $jul = Transaction::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', $year)->whereMonth('created_at', '07')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $aug = Transaction::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', $year)->whereMonth('created_at', '08')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $sep = Transaction::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', $year)->whereMonth('created_at', '09')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $okt = Transaction::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', $year)->whereMonth('created_at', '10')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $nov = Transaction::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', $year)->whereMonth('created_at', '11')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        $des = Transaction::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', $year)->whereMonth('created_at', '12')->groupBy(\DB::raw("Month(created_at)"))->pluck('count');

        return view('admin.dashboard.index', compact('countSchedule', 'countSpeaker', 'countTiket', 'countSponsor', 'jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'des'));
    }
}
