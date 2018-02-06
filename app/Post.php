<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //called posts in laravel

    use SoftDeletes;

    protected $dates=['deleted_at'];

    protected $fillable=[
        'title','content'
    ];
}
