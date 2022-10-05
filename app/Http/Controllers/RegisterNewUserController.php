<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegisterNewUserController extends Controller
{
    public function RegisterNewUser(Request $request)
    {   

       //dd($request->all());
      $this->validate($request,[
            'full_name' => 'required',
            'username' => 'required',
            'teacher_student' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
        ]);
        

         $check_user = User::where('username',  $request->input('username'))->orWhere('email',  $request->input('email'))->first();
         if ($check_user){

            return redirect()->back()->with('error','User name or email allready exist');

         }

        $input = new User();
        $input->full_name = $request->input('full_name');
        $input->username = $request->input('username');
        $input->first_name = ' ';
        $input->last_name = ' ';
        $input->password  = Hash::make($request->password);
        if ( $request->input('teacher_student')=='teacher') {
           $input->role_id = 5;
        }elseif ($request->input('teacher_student')=='student') {
           $input->role_id = 6;
        }else{
            $input->role_id = 1;
        }

        $input->gender = $request->input('gender');
        $input->email = $request->input('email');
        $input->status_id = $request->input('status_id');
        $input->save();

       return redirect('login')->with('success','User has been registered successfully');

    }
}
