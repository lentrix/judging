<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judge extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'passcode', 'contest_id','access_token'];

    public function contest() {
        return $this->belongsTo('App\Models\Contest');
    }

    public function score($criteriaId, $contestantId) {
        return Score::where('judge_id', $this->id)
                ->where('contestant_id', $contestantId)
                ->where('criteria_id', $criteriaId)
                ->first();
    }
}
