<?php

use App\Phoneme;
use App\Pronunciation;
use Illuminate\Database\Seeder;

class PhonemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # word, voice name, phonemes(symbol, stress_level)
        $words = [
            ['hello', 'Josh', [['h', 0], ['@', 0], ['l', 0], ['@U', 0]]],
            ['tab', 'Josh', [['t', 0], ['{', 1], ['b', 0]]],
            ['better', 'Josh', [['b', 0], ['E', 1], ['4', 0], ['r=', 0]]],
            ['corner', 'WillFromAfar', [['k', 0], ['O', 1], ['r', 0], ['n', 0], ['r=', 0]]],
            ['bad', 'Graham', [['b', 0], ['{', 1], ['d', 0]]]
        ];

        foreach($words as $word) {

            $pronunciation_id = Pronunciation::where('word','=',$word[0])->whereHas('voice', function ($query) use ($word) {
                $query->where('name', 'like', $word[1]);
            })->pluck('id')->first();

            $phonemes = $word[2];
            $phonemesCount =  count($phonemes);
            for($order = 0; $order < $phonemesCount; $order++){
                $phoneme = $phonemes[$order];

                $phoneme = Phoneme::create([
                    'sound' => $phoneme[0],
                    'stress_level' => $phoneme[1],
                    'order' => $order,
                    'pronunciation_id' => $pronunciation_id,
                ]);
            }

        }
    }
}
