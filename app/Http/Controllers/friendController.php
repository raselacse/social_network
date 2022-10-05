<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Friend;
use Auth;


class friendController extends Controller
{
    public function addfriend($id)
    {
      $user_request =Auth::user()->id;
      $friend_id=$id;
      $friend = new Friend();
      $friend->user_request=$user_request;
      $friend->friend_id=$friend_id;
      $friend->request_sent=1;
      $friend->save(); 
      return back();

    }

    public function confrimfriend($id)
    {
      $update = DB::table('friends')->where('id',$id)->update(['Status'=>1]);
      // dd( $update);
      return back();

    }

    public function removefriend($id)
    {
      $update = DB::table('friends')->where('user_request',$id)->update(['cancel_request'=>1]);
      return back();

    }
}
