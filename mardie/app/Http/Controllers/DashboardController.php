<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Category;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
    	$categories = Category::orderBy('name', 'ASC')->get();
    	return view('dashboard.index', compact('categories'));
    }
}
