<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function getLanguagesForDropdown() {
        $languages = Voice::all()->pluck('language');
        return array_unique($languages->toArray());
    }
}
