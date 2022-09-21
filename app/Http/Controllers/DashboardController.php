<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Settings;

class DashboardController extends Controller
{
    public function index()
    {

        if (auth()->user()!=null && auth()->user()->group_id != null){

            Auth::logout();
        }

        $data['title']=Settings::select('site_title')->first();

        return view('dashboard.index', $data);
    }


    public function homePage(){

        return view('frontend.home-page');
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
