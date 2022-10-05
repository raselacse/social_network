<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // public static function boot()
    // {
    //     parent::boot();
    //     static::creating(function ($post) {
    //         $post->created_by = Auth::user()->id;
    //         $post->updated_by = Auth::user()->id;
    //     });

    //     static::updating(function ($post) {
    //         $post->updated_by = Auth::user()->id;
    //     });
    // }


    public function Role(){
        return $this->belongsTo('App\Models\Role','role_id');
    }
}
