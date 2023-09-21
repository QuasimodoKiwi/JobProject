<?php

namespace app\Http\Controllers; //CHANGE AS NEEDED !!!

use Illuminate\Http\Request; //CHANGE AS NEEDED !!!

class secondpage extends Controller
{
    public function index()
    {
        return view('application_form');
    }


}

