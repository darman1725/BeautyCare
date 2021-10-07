<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeautyCareController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('menu.index',['user' => $user]);
    }
}
