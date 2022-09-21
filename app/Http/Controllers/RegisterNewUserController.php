<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RegisterNewUserController extends Controller
{
    public function RegisterNewUser(Request $request)
    {   

       // dd($request);
        
        $input = new User();
        $input->full_name = $request->input('full_name');
        $input->username = $request->input('username');
        $input->password  = Hash::make($request->password);
        
        $input->gender = $request->input('gender');
        $input->email = $request->input('email');
        

        $input->status_id = $request->input('status_id');


         
        $input->save();
       return redirect()->route('frontend.index');

    }
}
