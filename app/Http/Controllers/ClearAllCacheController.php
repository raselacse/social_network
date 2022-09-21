<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class ClearAllCacheController extends Controller
{
    public function index(){

        return view('clear-cache.index');
    }


    public function clearCache($val){
        //dd($val);
        switch ($val){
            case 0:
                Artisan::call('view:clear');
                Session::flash('success','View Cache Cleared Successfully!');
                break;
            case 1:
                Artisan::call('route:clear');
                Session::flash('success','Route Cache Cleared Successfully!');
                break;
            case 2:
                Artisan::call('cache:clear');
                Session::flash('success','Cache Cleared Successfully!');
                break;
            case 3:
                Artisan::call('config:cache');
                Session::flash('success','Configuration cache cleared successfully!');
                break;
            default:
                Session::flash('error','No Cache cleared!');
        }
        //dd(Session::get('success'));
        return redirect()->back();
    }



}
