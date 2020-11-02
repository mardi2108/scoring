<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function systhree()
    {
    	return $this->hasOne('App\Systhreesixty');
    }

    public function score()
    {
    	return $this->hasMany('App\Score');
    }
}
