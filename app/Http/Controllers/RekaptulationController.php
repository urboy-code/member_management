<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekaptulationController extends Controller
{
    public function index(){
        return view('dashboard.rekaptulation');
    }
}
