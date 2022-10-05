<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Settings;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;

use App\Models\create_page;

use App\Models\User;

use App\Models\Friend;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        if (auth()->user()!=null && auth()->user()->group_id != null){

            Auth::logout();
        }

        $data['title']=Settings::select('site_title')->first();

        $data['user']=User::where('role_id',1)->count();


        return view('dashboard.index', $data);
    }


    public function UserIndex()
    {


        $data['title']=Settings::select('site_title')->first();

        $user = User::where('role_id',1)->get();

        return view('old_frontend.all_user',$data,compact('user'));
    }


    public function all_user_post($id)
    {


        $data['title']=Settings::select('site_title')->first();

        

        $post = DB::table('posts')
                         ->leftJoin('users','users.id','posts.user_id')
                         ->select('posts.*','users.profile_image')
                         ->where('user_id',$id)
                         ->get();
                         // dd($post);
        
        return view('old_frontend.all_user_post',$data,compact('post'));
    }

    public function all_user_post_delete($id)
    {

      

           $post= Post::findOrFail($id);

            
        
        if($post){
            if( file_exists('public/post/image/'.$post->image) AND !empty($post->image))
            {
                unlink('public/post/image/'.$post->image);
            }
            $post->delete();
            return redirect()->back()->with('success','post information successfully deleted.');
        }
        
             else
            {
                return redirect()->back()->with('error','Something Error Found !, Please try again.');
            }
           
     }



    public function all_user_friend($id)
    {


        $data['title']=Settings::select('site_title')->first();

        

        $friend = DB::table('friends')
                         ->leftJoin('users','users.id','friends.friend_id')
                         ->select('friends.*','users.profile_image','users.full_name','users.email')
                         ->where('user_request',$id)
                         ->where('status',1)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         
                         ->get();
                         // dd($friend);
        
        return view('old_frontend.all_user_friend',$data,compact('friend'));
    }

    public function all_user_pandingfriend($id)
    {


        $data['title']=Settings::select('site_title')->first();

        

        $friendRequest = DB::table('friends')
                         ->leftJoin('users','users.id','friends.user_request')
                         ->select('friends.*','users.full_name','users.email','users.profile_image')
                         ->where('friends.user_request',Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->get();
                         // dd($friendRequest);
        
        return view('old_frontend.all_user_pandingfriend',$data,compact('friendRequest'));
    }

    public function approvefriend($id)
    {


        $data['title']=Settings::select('site_title')->first();

        

        $myfriends = DB::table('friends')
                         ->leftJoin('users','users.id','friends.user_request')
                         ->select('friends.*','users.full_name','users.email','users.profile_image')
                         ->where('friends.user_request',Auth::user()->id)
                         ->where('status',1)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->get();
                         // dd($myfriends);
        
        return view('old_frontend.all_user_approvefriend',$data,compact('myfriends'));
    }

    public function all_user_friend_delete($id)
    {

      

           $friend = Friend::findOrFail($id);

            
        
        if($friend){
            if( file_exists('public/profile/profile_image/'.$friend->profile_image) AND !empty($friend->profile_image))
            {
                unlink('public/profile/profile_image/'.$friend->profile_image);
            }
            $friend->delete();
            return redirect()->back()->with('success','friend information successfully deleted.');
        }
        
             else
            {
                return redirect()->back()->with('error','Something Error Found !, Please try again.');
            }
           
     }


    public function all_user_page($id)
    {


        $data['title']=Settings::select('site_title')->first();

        

        $page = DB::table('create_pages')
                         ->leftJoin('users','users.id','create_pages.user_id')
                         ->select('create_pages.*','users.full_name')
                         ->where('user_id',$id)
                         
                         ->get();
                         // dd($friend);
        
        return view('old_frontend.all_user_page',$data,compact('page'));
    }

    

    public function all_user_page_delete($id)
    {

      

           $page = create_page::findOrFail($id);

            
        
        if($page){
            if( file_exists('public/post/banner/'.$page->banner) AND !empty($page->banner))
            {
                unlink('public/post/banner/'.$page->banner);
            }
            $page->delete();
            return redirect()->back()->with('success','page information successfully deleted.');
        }
        
             else
            {
                return redirect()->back()->with('error','Something Error Found !, Please try again.');
            }
           
     }


    public function homePage()
    {

        return view('old_frontend.home-page');
    }


    public function multiLang($val){
        if ($val == 'bn'){
            \Illuminate\Support\Facades\Session::put('localeVal', 'bn');
        }else{
            \Illuminate\Support\Facades\Session::put('localeVal', 'en');
        }

        return redirect()->back();
    }


    public function page01(Request $request)
    {
      return view('pages.pages01');
    }
    public function page02(Request $request)
    {
      return view('pages.pages02');
    }
    public function proceeding(Request $request)
    {
      return view('pages.pages03');
    }
    public function implementationProgress(Request $request)
    {
      return view('pages.pages04');
    }
    public function meetingRoomDetails(Request $request)
    {
      return view('pages.pages05');
    }

    public function calender(Request $request)
    {
      return view('pages.pages06');
    }

    public function page07(Request $request)
    {
      return view('pages.pages07');
    }

    public function page08(Request $request)
    {
      return view('pages.pages08');
    }

    public function page09(Request $request)
    {
      return view('pages.pages09');
    }

    public function page10(Request $request)
    {
      return view('pages.pages10');
    }

    public function login11(Request $request)
    {
        return view('login.login');
    }

}
