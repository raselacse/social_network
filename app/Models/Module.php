<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Module extends Model {

	protected $table = 'module';
    public $timestamps = false;

    public static function boot()
    {
        parent::boot();


    }
        
        
        
}

