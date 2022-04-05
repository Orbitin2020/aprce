<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Models\Speaker;
use App\Models\Schedule;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Asia Pacific Retail Conference 2022',false);
        SEOTools::setDescription('Asia Pacific Retail Conference 2022');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        $jokowi = Speaker::where('speakPrioritas','1')->first();
        $speaker = Speaker::where('speakPrioritas','!=','1')->orderBy('speakPrioritas')->get();
        
        // $schedule = Schedule::with('speaker')->orderBy('tgl_mulai')->get()->groupBy(function($item) {
        //     $tanggal = $item->tgl_mulai;
        //     $tgl_mulai = date("Y-m-d", strtotime($tanggal));
        //     return $tgl_mulai;
        // });

        $schedule = Schedule::with('speaker')
        ->select('*',DB::raw('DATE(tgl_mulai) as date'))
        ->get()->groupBy('date')->toArray();
        
        $schedule = array_values($schedule);
        // dd($schedule->first());

        return view('user.home',compact('jokowi','speaker','schedule'));
    }

    public function about()
    {
        SEOTools::setTitle('About Asia Pacific Retail Conference 2022',false);
        SEOTools::setDescription('About Asia Pacific Retail Conference 2022');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('user.about');
    }

    public function speaker()
    {
        SEOTools::setTitle('Speaker Asia Pacific Retail Conference 2022',false);
        SEOTools::setDescription('Speaker Asia Pacific Retail Conference 2022');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('user.speaker');
    }

    public function schedule()
    {
        SEOTools::setTitle('Schedule Asia Pacific Retail Conference 2022',false);
        SEOTools::setDescription('Schedule Asia Pacific Retail Conference 2022');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('user.schedule');
    }

    public function contact()
    {
        SEOTools::setTitle('Contact Asia Pacific Retail Conference 2022',false);
        SEOTools::setDescription('Contact Asia Pacific Retail Conference 2022');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('user.contact');
    }
}
