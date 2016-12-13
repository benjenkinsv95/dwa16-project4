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
        return $this->hasMany('App\Phoneme')->orderBy('order');;
    }

    public function getAcapelaTag(){
        return '\prn=' . $this->getPhonemesString() . '\\';
    }

    public function getPhonemesString()
    {
        $phonemes = $this->phonemes()->getResults();
        $phonemesCount = count($phonemes);
        $phonemesString = '';

        for ($i = 0; $i < $phonemesCount; $i++) {
            $phoneme = $phonemes->get($i);
            $phonemesString .= $phoneme->sound;
            if ($phoneme->stress_level > 0) {
                $phonemesString .= $phoneme->stress_level;
            }
            if ($i != $phonemesCount - 1) {
                $phonemesString .= ' ';
            }
        }

        return $phonemesString;
    }
}
