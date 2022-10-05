<?php

namespace App\Http\Controllers;


use Illuminate\Support\Arr;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

use App\Models\create_page;

use App\Models\User;

use App\Models\Friend;

use Illuminate\Support\Facades\DB;

use carbon\carbon;

class profileController extends Controller
{
    public function store(Request $request,$id)
   {

       
        $date = Carbon::now()->format('his')+rand(1000,9999);
        // $update = DB::table('users')->where('id',$id)->first();
        $update = User::find($id);
        
           $update->full_name = $request->input('full_name');

            if($images = $request->file('profile_image')){
            $extention = $request->file('profile_image')->getClientOriginalExtension();
            $imageName = $date.'.'.$extention;
            $path = public_path('profile/profile_image');
            $images->move($path,$imageName);


           
            $update->profile_image = $imageName;
         }

         if($images = $request->file('profile_banner')){
            $extention = $request->file('profile_banner')->getClientOriginalExtension();
            $imageName = $date.'.'.$extention;
            $path = public_path('profile/profile_banner');
            $images->move($path,$imageName);


           
            $update->profile_banner = $imageName;
         }
          


         $update->save();

       return redirect()->back();
   }

    public function index()
    {
        $image = User::where('id',Auth::user()->id)->first();
        
        $user = Auth::user();
        $approvedFriend=Friend::select('friend_id')->where('status',1)->get()->toArray();
        $approvedFriend=Arr::flatten($approvedFriend);

        $myfriends = user::whereIn('id',$approvedFriend)->get();
        $requestcount = Friend::where('user_request', Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->count();
         return View('frontend.page.profile',compact('myfriends','requestcount','user','image'));  
    }
}
