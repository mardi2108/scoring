<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Systhreesixty;
use App\Course;
use App\Score;
use App\Player;
use DB;

class ProductController extends Controller
{
    public function index()
    {
    	$scores = Score::get();
    	$courses = Course::get();
    	$score = Score::all();
        return view('product.index', compact('scores', 'courses', 'score'));
    }

    public function updateSys(Request $request)
    {   
        
            $courses = Course::get();
            $score = Score::all();
            $scores = Score::select('id', 'h_one', 'h_two')->first();
    	   if ($scores->h_one == $courses->first()->p_one) {
               
               $threesixty = Systhreesixty::create([
                'score_id' => $score->first()->id,
                'h_one' => '1',
            ]);
               return redirect()->back();
           }elseif ($scores->h_one <= $courses->first()->p_one) {
            
            $threesixty = Systhreesixty::create([
                'score_id' => $score->first()->id,
                'h_one' => '2',
            ]);
            return redirect()->back();
            }else{
            $threesixty = Systhreesixty::create([
                'score_id' => $score->first()->id,
                'h_one' => '0',
            ]); 
    //         $threesixty = Systhreesixty::create([
    //             'score_id' => $scores->first()->id,
    //             'h_one' => 0,
    //             'h_two' => 0,
    //             'h_three' => 0,
    //             'h_four' => 0,
    //             'h_five' => 0,
    //             'h_six' => 0,
    //             'h_seven' => 0,
    //             'h_eight' => 0,
    //             'h_nine' => 0,
    //             'h_out' => 0,
    //             'h_ten' => 0,
    //             'h_elev' => 0,
    //             'h_twelv' => 0,
    //             'h_thrth' => 0,
    //             'h_fourth' => 0,
    //             'h_fivth' => 0,
    //             'h_sixth' => 0,
    //             'h_sevth' => 0,
    //             'h_eigth' => 0,
    //             'h_in' => 0,
    //             'total' => 0,
    //             'gross' => 0,
    //             'nett' => 0,
    //       ]);
    //         // dd($courses);
            return redirect()->back();
            }
    }

}
