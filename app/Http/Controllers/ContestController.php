<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contest;
use Illuminate\Support\Str;

class ContestController extends Controller
{
    public function index() {
        $contests = Contest::where('user_id', auth()->user()->id)->orderBy('created_at','DESC')->get();

        return view('contests.index',[
            'contests' => $contests
        ]);
    }

    public function create() {
        return view('contests.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'string|required',
            'schedule' => 'string|required',
            'venue' => 'string|required',
        ]);

        $code = Str::random(7);

        $contest = Contest::create([
            'title' => $request->title,
            'schedule' => $request->schedule,
            'venue' => $request->venue,
            'event_code' => $code,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/contests/' . $contest->id)->with('Info','A new contest has been created.');
    }

    public function show(Contest $contest) {
        return view('contests.show', [
            'contest' => $contest
        ]);
    }
}
