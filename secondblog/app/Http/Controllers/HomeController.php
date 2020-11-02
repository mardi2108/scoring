<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Score;
use App\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $players = Player::with(['score'])->orderBy( 'name', 'asc' )->get();
        $scores = Score::get();
        return view('dashboard.index', compact('players', 'scores'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'hcap' => 'required|integer',
            'flight' => 'required|string|max:2',
            'bagtag' => 'required|integer',
        ]);

        try {

            $player = Player::create([
                'name' => $request->name,
                'hcap' => $request->hcap,
                'flight' => $request->flight,
                'bagtag' => $request->bagtag
            ]);
            
            $score = Score::where('player_id', $player->id);
            $score->create([
                'player_id' => $player->id,
            ]);
// dd($score);
            return redirect(route('dashboard'))
                ->with(['success' => '<strong>' . $player->name . '</strong> Ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $players = Player::with('score')->findOrFail($id);
        $players->delete();
        return redirect()->back()->with(['success' => '<strong>' . $players->name . '</strong> Telah Dihapus!']);
    }

    public function edit($id)
    {
        
        $score = Score::findOrFail($id);
        $player = Player::findOrFail($id);
        return view('dashboard.edit', compact('player', 'score'));
        // dd($player, $score);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'hcap' => 'required|integer',
            'flight' => 'required|string|max:2',
            'bagtag' => 'required|string|max:4'
        ]);

        try {
            $player = Player::find($id);
            $player->update([
                'name' => $request->name,
                'hcap' => $request->hcap,
                'flight' => $request->flight,
                'bagtag' => $request->bagtag
            ]);

            return redirect('dashboard')
                ->with(['success' => '<strong>' . $player->name . '</strong> Diperbaharui']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
        // dd($player);
    }

    public function scoreUpdate(Request $request, $id)

    {
        $score = Score::with('course')->find($id);
        $score->update([
            'h_one' => $request->h_one,
            'h_two' => $request->h_two,
            'h_three' => $request->h_three,
            'h_four' => $request->h_four,
            'h_five' => $request->h_five,
            'h_six' => $request->h_six,
            'h_seven' => $request->h_seven,
            'h_eight' => $request->h_eight,
            'h_nine' => $request->h_nine,
            'h_out' => $request->h_out,
            'h_ten' => $request->h_ten,
            'h_elev' => $request->h_elev,
            'h_twelv' => $request->h_twelv,
            'h_thrth' => $request->h_thrth,
            'h_fourth' => $request->h_fourth,
            'h_fivth' => $request->h_fivth,
            'h_sixth' => $request->h_sixth,
            'h_sevth' => $request->h_sevth,
            'h_eigth' => $request->h_eigth,
            'h_in' => $request->h_in,
            'total' => $request->h_in+$request->h_out,
            'gross' => $request->total,
            'nett' => $request->nett,
        ]);

        return redirect('history')
                ->with(['success' => '<strong>' . 'score' . '</strong> Diperbaharui']);
    }

    public function cari(Request $request)
    {
        
        $cari = $request->cari;
 
            // mengambil data dari table pegawai sesuai pencarian data
        $players = Player::where('name','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data pegawai ke view index
        return view('dashboard.index',['players' => $players]);
    }

}
