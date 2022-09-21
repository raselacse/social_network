<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Activity extends Model {

	
	protected $table = 'activity';
    public $timestamps = false;

    public static function boot()
    {
        parent::boot();
        static::creating(function($post) {

            //following
            if(!empty(Auth::user()->id)){
                $post->created_by = Auth::user()->id;
                $post->updated_by = Auth::user()->id;
            }
        });

        static::updating(function($post) {
            if(!empty(Auth::user()->id)){
                $post->updated_by = Auth::user()->id;
            }
        });


    }
        
        
}

