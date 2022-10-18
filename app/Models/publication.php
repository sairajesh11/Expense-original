<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
    //
    protected $fillable = ['user_id','title','status','year'];
}