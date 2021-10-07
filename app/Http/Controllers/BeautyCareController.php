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

    public function treatments(){
        return view('layouts.treatments');
    }


    /* Method Untuk Folder Docters */
    public function dragustina(){
        return view('docters.dokteragustina');
    }

    public function drainun(){
        return view('docters.dokterainun');
    }

    public function drbalquist(){
        return view('docters.dokterbalquist');
    }

    public function drcatherina(){
        return view('docters.doktercatherina');
    }

    /* Method Untuk Folder Treatments */
    public function acne(){
        return view('treatments.acne');
    }

    public function botox(){
        return view('treatments.botox');
    }

    public function electrocautery(){
        return view('treatments.electrocautery');
    }

    public function glowarmpit(){
        return view('treatments.glowarmpit');
    }

    public function glowneck(){
        return view('treatments.glowneck');
    }

    public function purifying(){
        return view('treatments.purifying');
    }
}
