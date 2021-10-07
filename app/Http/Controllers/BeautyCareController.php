<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeautyCareController extends Controller
{

    /* Method Untuk Folder Layouts */
    public function index(){
        return view('layouts.index');
    }

    public function login(){
        return view('layouts.login');
    }
    
    public function contact(){
        return view('layouts.contact');
    }

    public function specialists(){
        return view('layouts.specialists');
    }
}
