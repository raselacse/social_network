<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\create_page;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Friend;
use Illuminate\Support\Arr;
use App\Models\User;
use App\Models\Page_post;
use carbon\carbon;
use Illuminate\Support\Facades\Auth;



class my_pageController extends Controller
{


    public function store(Request $request)

    { 
        

        $user = Auth::user();

        
        $input = new Page_post();

        $input->page_post_content = $request->input('page_post_content');

     
        $date = Carbon::now()->format('his')+rand(1000,9999);
       
        if($images = $request->file('image')){
            $extention = $request->file('image')->getClientOriginalExtension();
            $imageName = $date.'.'.$extention;
            $path = public_path('post/image');
            $images->move($path,$imageName);


           
            $input->image = $imageName;
         }

        $input->user_name =$user->username;
        $input->created_by=Auth::user()->id;
        $input->updated_by =Auth::user()->id;
        $input->user_id =$user->id;
        $input->page_id =$request->input('page_id');
        

        

        $input->save();
        return redirect()->back(); 
        
    }
    public function view_page($id)
    { 
        $approvedFriend=Friend::select('friend_id')->where('status',1)->get()->toArray();
        $approvedFriend=Arr::flatten($approvedFriend);

        $myfriends = user::whereIn('id',$approvedFriend)->get();

        $requestcount = Friend::where('user_request', Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->count();
  
        $my_page = DB::select("SELECT h.* from create_pages h
                        left join users i on i.id = h.user_id
                         where h.id = '$id'");

        $view_page_post =Page_post::where('user_id', Auth::user()->id)->where('page_id',$id)->get();
                
        return View('frontend.page.my_pages.my_pages',compact('my_page','myfriends','requestcount','view_page_post'));
    }



    
}
