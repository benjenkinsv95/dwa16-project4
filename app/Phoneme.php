<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phoneme extends Model
{
    public function pronunciation()
    {
        return $this->belongsTo('App\Pronunciation');
    }
}
