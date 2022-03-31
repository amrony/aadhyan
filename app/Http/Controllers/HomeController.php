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

    public function contact(Request $request){

        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'class' => 'required',
            'state' => 'required',
            'target-exam' => 'required',
        ]);

        // dd($request->all());

        // Contact::create($request->all());


        // return redirect()->back()->with('success','Sent Successfully.');

    }

}
