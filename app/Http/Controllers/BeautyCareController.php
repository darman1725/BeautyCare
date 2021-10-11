<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeautyCareController extends Controller
{

    /* Method Untuk Folder Layouts */
    public function indexLayouts(){
        return view('layouts.index');
    }

    public function loginLayouts(){
        return view('layouts.login');
    }

    public function registerLayouts(){
        return view('layouts.register');
    }
    
    public function contactLayouts(){
        return view('layouts.contact');
    }

    public function specialistsLayouts(){
        return view('layouts.specialists');
    }

    public function treatmentsLayouts(){
        return view('layouts.treatments');
    }

    public function formreservasiLayouts(){
        return view('layouts.formreservasi');
    }

    public function masterLayouts(){
        return view('layouts.master');
    }


    /* Method Untuk Folder Docters */
    public function createDoctors(){
        return view('doctors.create');
    }

    public function detailDoctors(){
        return view('doctors.detail');
    }

    public function editDoctors(){
        return view('doctors.edit');
    }

    public function indexDocters(){
        return view('doctors.index');
    }

    /* Method Untuk Folder Treatments */
    public function createTreatments(){
        return view('treatments.create');
    }

    public function detailTreatments(){
        return view('treatments.detail');
    }

    public function editTreatments(){
        return view('treatments.edit');
    }

    public function indexTreatments(){
        return view('treatments.index');
    }

    /* Method Untuk Folder Customers */
    public function customersTreatments(){
        return view('customers.customersTreatments');
    }
}
