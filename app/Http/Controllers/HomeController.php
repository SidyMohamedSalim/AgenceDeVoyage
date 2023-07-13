<?php

namespace App\Http\Controllers;

use App\Models\Tours;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home',[
            'toursBest'=>Tours::query()->orderByDesc('rating')->limit(6)->get(),
            'toursNews'=>Tours::query()->orderByDesc('created_at')->limit(6)->get()
        ]);
    }
}
