<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\create_page;
use carbon\carbon;

use Illuminate\Support\Facades\Auth;

class create_pageController extends Controller
{
   public function store(Request $request)
   {

        // dd($request);
        $user = Auth::user();
        // dd($user);

        $input = new create_page();
        $input->page_name = $request->input('page_name');
        $input->sub_title = $request->input('sub_title');
        
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
}
