<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criteria;
use App\Models\Contest;

class CriteriaController extends Controller
{
    public function store(Request $request, Contest $contest) {
        $request->validate([
            'name' => 'string|required',
            'description' => 'string|required',
            'weight' => 'numeric|required',
        ]);

        Criteria::create([
            'name' => $request->name,
            'description' => $request->description,
            'weight' => $request->weight,
            'contest_id' => $contest->id
        ]);

        return redirect("/contests/$contest->id")->with('Info','A criteria has been added.');
    }
}
