<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function about()
    {
        return view('user.about');
    }

    public function speaker()
    {
        return view('user.speaker');
    }

    public function schedule()
    {
        return view('user.schedule');
    }

    public function contact()
    {
        return view('user.contact');
    }
}
