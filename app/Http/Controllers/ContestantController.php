<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contest;
use App\Models\Contestant;

class ContestantController extends Controller
{
    public function store(Request $request, Contest $contest) {
        $request->validate([
            'name' => 'string|required',
            'number' => 'required|numeric',
            'remarks' => 'string',
        ]);

        Contestant::create([
            'name' => $request->name,
            'number' => $request->number,
            'remarks' => $request->remarks,
            'contest_id' => $contest->id,

        ]);

        return redirect("/contests/$contest->id")->with('Info','A new contestant has been added.');
    }
}
