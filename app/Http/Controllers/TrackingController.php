<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    //
    public function show(){
        return view("trackings.tracking-view");
    }
}
