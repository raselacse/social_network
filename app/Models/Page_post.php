<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_post extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $table = "Page_posts";
}
