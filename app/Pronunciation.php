<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pronunciation extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function voice()
    {
        return $this->belongsTo('App\Voice');
    }

    public function phonemes()
    {
        return $this->hasMany('App\Phoneme');
    }
}
