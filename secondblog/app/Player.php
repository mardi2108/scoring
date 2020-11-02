<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = [];

    public function score()
    {
    	return $this->hasOne('App\Score');
	}
}
