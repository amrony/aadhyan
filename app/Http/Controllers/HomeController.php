<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home');
    }

    public function privacyPolicy()
    {
        return view('home.privacy_policy');
    }

    public function disclaimer(){
        return view('home.disclaimer');
    }

}
