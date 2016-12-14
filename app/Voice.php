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

    public static function getForDropdown() {
        $voices = Voice::orderBy('name')->get();
        $voices_for_dropdown = [];

        foreach($voices as $voice) {
            $voices_for_dropdown[$voice->id] = $voice->name.' - '
                .$voice->language;
        }

        return $voices_for_dropdown;
    }
}
