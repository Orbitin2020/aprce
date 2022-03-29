<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Asia Pacific Retail Conference 2022',false);
        SEOTools::setDescription('Asia Pacific Retail Conference 2022');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('user.home');
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
