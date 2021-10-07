<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeautyCareController extends Controller
{
    public function index(){
        return view('layouts.index');
    }
    
}
