<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'schedule', 'venue', 'event_code'
    ];

    public function judges() {
        return $this->hasMany('App\Models\Judge');
    }

    public function contestants() {
        return $this->hasMany('App\Models\Contestant');
    }

    public function criterias() {
        return $this->hasMany('App\Models\Criteria');
    }
}
