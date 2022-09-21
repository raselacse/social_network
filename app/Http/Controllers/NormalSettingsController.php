<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class NormalSettingsController extends Controller
{
    public function index($param){
        if ($param==1){
            return view('settings.normal-settings');
        }elseif ($param==2){
            return view('settings.usage-indication');
        }else{
            $faqInfo = Faq::where('status', 1)->get();

            return view('settings.faq', compact('faqInfo'));
        }

    }
}
