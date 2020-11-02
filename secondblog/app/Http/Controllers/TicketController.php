<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Ticket;
use App\User;

class TicketController extends Controller
{
    public function index()
    {
    	$tickets = Ticket::with(['user'])->first();
        
        return view('tickets.index', compact('tickets'));
    }

    public function kirimTiket(Request $request)
    {
    	$tickets = Ticket::with(['user'])->orderBy('created_at')->get();
        $users = User::all();
        return view('tickets.edit', compact('tickets', 'users'));
    }

    public function prosess(Request $request)
    {
        
        DB::transaction(function () use ($request) {
            try{
            $jum = $request->stock;
            $sender = Auth::user()->id;
            $receiver = $request->user_id;
    // insert post
        DB::table('tickets')->where('user_id', $sender)
            ->decrement('stock', $jum);
        DB::table('tickets')->where('user_id', $receiver)
            ->increment('stock', $jum);
        } catch (\Exception $e) {
            DB::rollback();

   }

   });



        // $users = User::with(['ticket'])->where('username', $request->username)->first();
        // $tickets = Ticket::where('user_id', $request->user_id);
        // $i = ($tickets->stock);
        // $tickets->update([
        //     'stock' => $request->stock + $i,
        // ]);
        // // return $request->all();
        return redirect()->back()
            ->with(['success' => '<strong>' . 'Tiket' . '</strong> Ticket berhasil dikirim']);
    }
}
