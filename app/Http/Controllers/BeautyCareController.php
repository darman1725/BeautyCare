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
    
}
