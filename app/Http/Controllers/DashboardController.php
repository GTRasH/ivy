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

        // Channel R3m0t3 j03
        $channel = Youtube::getChannelById('UCZBzhwB0w9M686PF7Z649Nw');

            $data = array(
                'id' => $channel->id,
                'title' => $channel->snippet->title,
                'description' => $channel->snippet->description,
                'viewcount' => $channel->statistics->viewCount,
                'subscribers' => $channel->statistics->subscriberCount,
                'comments' => $channel->statistics->commentCount,
                'videos' => $channel->statistics->videoCount
            );

            return view('youtube.dashboard')->with('data',$data);
    }

    public function videos() {

        return view('youtube.videos');

    }

    public function playlists() {

        return view('youtube.playlists');

    }

    public function analytics() {

        return view('youtube.analytics');

    }
}
