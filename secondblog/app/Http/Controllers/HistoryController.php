<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Score;

class HistoryController extends Controller
{
    public function index()
    {
    	$players = Player::with('score')->orderBy('name', 'asc')->get();
    	$scores = Score::with('player')->orderBy('gross', 'asc')->get();
    	return view('history.index', compact('players', 'scores'));
    }
}