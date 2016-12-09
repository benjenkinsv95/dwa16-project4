<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voice extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function pronunciations()
    {
        return $this->hasMany('App\Pronunciation');
    }
}
