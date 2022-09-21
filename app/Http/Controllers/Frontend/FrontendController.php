<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\create_page;

class FrontendController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $postview = post::all();
      
        return view('frontmaster',compact('user','postview'));

     }


    public function timeline()
    {
        $user = Auth::user();
        $postview = post::all();
        return view('frontend.page.timeline',compact('user','postview'));
    }

    public function photo_page()
    {
        return view('frontend.page.photospage');
    }

    public function videos_page()
    {
        return view('frontend.page.videospage');
    }


    public function friends_page()
    {
        return view('frontend.page.friendspage');
    }


    public function groups_page()
    {
        return view('frontend.page.groupspage');
    }


    public function about_page()
    {
        return view('frontend.page.aboutpage');
    }

    public function create_page()
    {
        return view('frontend.page.create_page');
    }

    public function edit_password()
    {
        return view('frontend.page.edit_password');
    }

    public function massage_box()
    {
        return view('frontend.page.massage_box');
    }


    public function notification_page()
    {
        return view('frontend.page.notification_page');
    }

    public function my_page()
    {
        $my_page = create_page::all();
       

        return view('frontend.page.my_page',compact('my_page'));
    }
}
