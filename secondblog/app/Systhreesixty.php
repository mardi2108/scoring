<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Systhreesixty extends Model
{
     protected $guarded = [];

    public function course()
    {
    	return $this->belongsTo('App\Course');
    }
}
