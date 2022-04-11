<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Models\Speaker;
use App\Models\Schedule;
use App\Models\Tiket;
use App\Models\Sponsor;
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
        // dd($jokowi);
        $speaker = Speaker::where('speakPrioritas','!=','1')->orderBy('speakPrioritas')->get();
                    // ->groupBy('speakPrioritas')->toArray();

        // $speaker = array_values($speaker);

        // dd($speaker);
        $schedule = Schedule::with('speaker')
        ->select('*',DB::raw('DATE(tgl_mulai) as date'))
        ->get()->groupBy('date')->toArray();
        $schedule = array_values($schedule);
        // dd($schedule);
        
        $offline = Tiket::where('kategori','offline')->orderBy('harga')->get();
        $online = Tiket::where('kategori','online')->orderBy('harga')->get();
        $sponsor = Sponsor::all();
        // dd($online);
        return view('user.home',compact('jokowi','speaker','schedule','offline','online','sponsor'));
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
        $speaker = Speaker::orderBy('speakPrioritas')->get();
        return view('user.speaker',compact('speaker'));
    }

    public function schedule()
    {
        SEOTools::setTitle('Schedule Asia Pacific Retail Conference 2022',false);
        SEOTools::setDescription('Schedule Asia Pacific Retail Conference 2022');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        $schedule = Schedule::with('speaker')
        ->select('*',DB::raw('DATE(tgl_mulai) as date'))
        ->get()->groupBy('date')->toArray();
        $schedule = array_values($schedule);
        return view('user.schedule',compact('schedule'));
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
