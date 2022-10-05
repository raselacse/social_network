<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Elibrary;

use Illuminate\Support\Arr;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

use App\Models\create_page;

use App\Models\User;

use App\Models\Friend;

use Illuminate\Support\Facades\DB;

use carbon\carbon;

class ElibraryController extends Controller
{

    public function form()
    {
        
        
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

        return view('frontend.page.my_pages.elibraryform',compact('myfriends','requestcount','user'));
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
        $view = Elibrary::all();
        // dd($view);
    return View('frontend.page.elibrary',compact('image','myfriends','requestcount','user','view'));
   }

   public function store(Request $request)
   {
       // dd($request);
       
        $user = Auth::user();
        

        $input = new Elibrary();

        $input->title = $request->input('title');
        
        $date = Carbon::now()->format('his')+rand(1000,9999);

        if($document = $request->file('document')){
            $extention = $request->file('document')->getClientOriginalExtension();
            $imageName = $date.'.'.$extention;
            $path = public_path('post/document');
            $document->move($path,$imageName);


           
            $input->document = $imageName;
         }

        
        $input->user_id =$user->id;
        $input->created_by=Auth::user()->id;
        $input->updated_by =Auth::user()->id;


         
        $input->save();
       return redirect('e-Library');
   }


   public function delete($id)
    {

      

           $post= Elibrary::findOrFail($id);

            
        
        if($post){
            if( file_exists('public/post/document/'.$post->document) AND !empty($post->document))
            {
                unlink('public/post/document/'.$post->document);
            }
            $post->delete();
            return redirect()->back()->with('success','post information successfully deleted.');
        }
        
             else
            {
                return redirect()->back()->with('error','Something Error Found !, Please try again.');
            }
           
     }
}
