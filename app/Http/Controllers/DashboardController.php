<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alaouy\Youtube\Facades\Youtube;

class DashboardController extends Controller
{
    //

    public function index() {

        $channel = Youtube::getChannelById('UCZBzhwB0w9M686PF7Z649Nw');
        dd($channel);
        //return view('dashboard');

    }
}
