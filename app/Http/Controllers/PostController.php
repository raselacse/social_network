<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\Settings;
use carbon\carbon;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)

    {

        $user = Auth::user();
        // dd($user);
        $input = new Post();
        $input->post_content = $request->input('post_content');

     
       $date = Carbon::now()->format('his')+rand(1000,9999);

        if($audios = $request->file('audio')){
            $extention = $request->file('audio')->getClientOriginalExtension();
            $imageName = $date.'.'.$extention;
            $path = public_path('post/audio');
            $audios->move($path,$imageName);


           
            $input->audio = $imageName;
         }


         if($videos = $request->file('video')){
            $extention = $request->file('video')->getClientOriginalExtension();
            $imageName = $date.'.'.$extention;
            $path = public_path('post/video');
            $videos->move($path,$imageName);


           
            $input->video = $imageName;
         }


         if($images = $request->file('image')){
            $extention = $request->file('image')->getClientOriginalExtension();
            $imageName = $date.'.'.$extention;
            $path = public_path('post/image');
            $images->move($path,$imageName);


           
            $input->image = $imageName;
         }
        $input->username =$user->username;
        $input->user_id =$user->id;

        $input->save();
        return redirect()->back(); 
        
    }

   
}
