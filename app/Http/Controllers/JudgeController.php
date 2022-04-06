<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Contest;
use App\Models\Judge;

class JudgeController extends Controller
{
    public function store(Request $request, Contest $contest) {
        $request->validate([
            'name' => 'string|required',
            'pass_code' => 'string|required',
        ]);

        Judge::create([
            'name' => $request->name,
            'passcode' => $request->pass_code,
            'contest_id' => $contest->id,
            'access_token' => Str::random(64)
        ]);

        return redirect('/contests/' . $contest->id)->with('Info','A new Judge has been created.');
    }
}
