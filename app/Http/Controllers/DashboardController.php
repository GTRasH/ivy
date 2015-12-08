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

        if (!empty($channel->id)) {


//dd($channel->statistics->viewCount);
            $data = array(
                'id' => $channel->id,
                'title' => $channel->snippet->title,
                'description' => $channel->snippet->description,
                'viewcount' => $channel->statistics->viewCount,
                'subscribers' => $channel->statistics->subscriberCount,
                'comments' => $channel->statistics->commentCount,
                'videos' => $channel->statistics->videoCount
            );

            return view('dashboard')->with('data',$data);
        }
        else {
            return 'sorry, connecting to youtube failed';
        }
    }

    public function videos() {

        return view('videos');

    }

    public function playlists() {

        return view('playlists');

    }

    public function analytics() {

        return view('analytics');

    }
}
