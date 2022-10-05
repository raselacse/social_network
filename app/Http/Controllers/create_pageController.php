<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use carbon\carbon;

use Illuminate\Support\Arr;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

use App\Models\create_page;

use App\Models\User;

use App\Models\Friend;

use Illuminate\Support\Facades\DB;

class create_pageController extends Controller
{
   public function store(Request $request)
   {

        // dd($request);
        $user = Auth::user();
        // dd($user);

        $input = new create_page();
        $input->page_name = $request->input('page_name');
       
        
        $input->email = $request->input('email');
        $input->phone = $request->input('phone');
        $date = Carbon::now()->format('his')+rand(1000,9999);
        if($images = $request->file('banner')){
            $extention = $request->file('banner')->getClientOriginalExtension();
            $imageName = $date.'.'.$extention;
            $path = public_path('post/banner');
            $images->move($path,$imageName);


           
            $input->banner = $imageName;
         }

        $input->domain = $request->input('domain');

        $input->states = $request->input('states');

        $input->city = $request->input('city');
        $input->additional_info = $request->input('additional_info');

        $input->facebook_link = $request->input('facebook_link');

        $input->twitter  = $request->input('twitter ');
        $input->instagram = $request->input('instagram');
        $input->user_id =$user->id;


         
        $input->save();
       return redirect()->back();
   }


   public function edit_page($id)
    {

        $image = User::where('id',Auth::user()->id)->first();
        $approvedFriend=Friend::select('friend_id')->where('status',1)->get()->toArray();
        $approvedFriend=Arr::flatten($approvedFriend);

        $myfriends = user::whereIn('id',$approvedFriend)->get();

        $requestcount = Friend::where('user_request', Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->count();


          $create_page = create_page::findOrFail($id);

         return view('frontend.page.my_pages.edit_page',compact('create_page','myfriends','requestcount','image'));
    }

    public function update_page(Request $request, $id)
      {
        $input = create_page::find($id);
         // dd($request);
        $user = Auth::user();
        // dd($user);

       
        $input->page_name = $request->input('page_name');
        
        
        $input->email = $request->input('email');
        $input->phone = $request->input('phone');
        $date = Carbon::now()->format('his')+rand(1000,9999);
        if($images = $request->file('banner')){
            $extention = $request->file('banner')->getClientOriginalExtension();
            $imageName = $date.'.'.$extention;
            $path = public_path('post/banner');
            $images->move($path,$imageName);


           
            $input->banner = $imageName;
         }

        $input->domain = $request->input('domain');

        $input->states = $request->input('states');

        $input->city = $request->input('city');
        $input->additional_info = $request->input('additional_info');

        $input->facebook_link = $request->input('facebook_link');

        $input->twitter  = $request->input('twitter ');
        $input->instagram = $request->input('instagram');
        $input->user_id =$user->id;


         
        $input->update();
       return redirect()->route('frontend.my_page');
      } 

      public function delete_page($id)

    {

        $create_page = create_page::findOrFail($id);

       if ($create_page)
         {
            $create_page->delete();
            return redirect()->route('frontend.my_page')->with('success', 'Data information successfully deleted.');
        }

    } 
}
