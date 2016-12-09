<?php

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
        $phonemes = [
            ['hello', 'Josh (Child)'],
            ['tab', 'Josh (Child)'],
            ['better', 'Josh (Child)'],
            ['corner', 'Will (FromAfar)'],
            ['bad', 'Graham']
        ];

        foreach($phonemes as $phoneme) {

            $pronunciation_id = Pronunciation::whereHas('voice', function($query) {
                $query->where('name', 'like', $phoneme[1]);
            })->where('word','=',$phoneme[0])->pluck('id')->first();

            $phoneme = Pronunciation::create([
                'word' => $phoneme[0],
                'pronunciation_id' => $pronunciation_id,
            ]);
        }
    }
}
