<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HistoryController extends Controller
{
    public function index()
    {
    	$category = Category::get();
    	return view('history.index', compact('category'));
    }
}
