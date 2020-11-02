<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
