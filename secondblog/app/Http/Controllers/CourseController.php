<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Score;
use App\Course;

class CourseController extends Controller
{
    public function index()
    {
        $players = Player::with(['score'])->get();
        $scores = Score::all();
        $courses = Course::all();
        return view('course.index', compact('players', 'scores', 'courses'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'p_one' => 'required|string|max:2',
            'p_two' => 'required|string|max:2',
            'p_three' => 'required|string|max:2',
            'p_four' => 'required|string|max:2',
            'p_five' => 'required|string|max:2',
            'p_six' => 'required|string|max:2',
            'p_seven' => 'required|string|max:2',
            'p_eight' => 'required|string|max:2',
            'p_nine' => 'required|string|max:2',
            'p_ten' => 'required|string|max:2',
            'p_elv' => 'required|string|max:2',
            'p_twl' => 'required|string|max:2',
            'p_thrth' => 'required|string|max:2',
            'p_fourth' => 'required|string|max:2',
            'p_fivth' => 'required|string|max:2',
            'p_sixth' => 'required|string|max:2',
            'p_sevth' => 'required|string|max:2',
            'p_eigth' => 'required|string|max:2',
            'p_in' => 'required|string|max:2',
            'p_out' => 'required|string|max:2',
            'p_tot' => 'required|string|max:2',

        ]);

        try {

            $courses = Course::create([
                'name' => $request->name,
                'p_one' => $request->p_one,
                'p_two' => $request->p_two,
                'p_three' => $request->p_three,
                'p_four' => $request->p_four,
                'p_five' => $request->p_five,
                'p_six' => $request->p_six,
                'p_seven' => $request->p_seven,
                'p_eight' => $request->p_eight,
                'p_nine' => $request->p_nine,
                'p_ten' => $request->p_ten,
                'p_elv' => $request->p_elv,
                'p_twl' => $request->p_twl,
                'p_thrth' => $request->p_thrth,
                'p_fourth' => $request->p_fourth,
                'p_fivth' => $request->p_fivth,
                'p_sixth' => $request->p_sixth,
                'p_sevth' => $request->p_sevth,
                'p_eigth' => $request->p_eigth,
                'p_in' => $request->p_in,
                'p_out' => $request->p_out,
                'p_tot' => $request->p_tot,
            ]);

            return redirect(route('course.index'))
                ->with(['success' => '<strong>' . $scores->name . '</strong> Ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $players = Player::findOrFail($id);
        $players->delete();
        return redirect()->back()->with(['success' => '<strong>' . $players->name . '</strong> Telah Dihapus!']);
    }

    public function edit($id)
    {
        $player = Player::findOrFail($id);
        return view('dashboard.edit', compact('player'));
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
}
