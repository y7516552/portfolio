<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact(Request $request)
    {   
        
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,
        ]);

        return redirect()->route('index');
    }

    // public function portfolio()
    // {
    //     return view('front.portfolio');
    // }
    public function  fitness()
    {
        return view('front.content.fitness');
    }
    public function weather()
    {
        return view('front.content.weather');
    }
    public function info()
    {
        return view('front.content.CovidInfo');
    }
    public function game()
    {
        return view('front.content.game');
    }

}
