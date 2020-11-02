<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Category extends Model
{
    protected $fillable = ['name', 'terima', 'kirim', 'category_id'];
    
    
}
