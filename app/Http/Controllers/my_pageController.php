<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\create_page;
use Illuminate\Support\Facades\DB;

class my_pageController extends Controller
{
    public function view_page($id)
    { 
  
        $my_page = DB::select("SELECT h.* from create_pages h
                        left join users i on i.id = h.user_id
                         where h.id = '$id'");
                
        return View('frontend.page.my_pages.my_pages',compact('my_page'));
    }
}
