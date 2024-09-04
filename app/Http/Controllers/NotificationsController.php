<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    //
    public function show(){
        return view("notification.notification-view");
    }
}
