<?php

use App\Pronunciation;
use App\User;
use App\Voice;
use Illuminate\Database\Seeder;

class PronunciationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pronunciations = [
            ['hello', 'Josh (Child)'],
            ['tab', 'Josh (Child)'],
            ['better', 'Josh (Child)'],
            ['corner', 'Will (FromAfar)'],
            ['bad', 'Graham']
        ];

        $existingVoices = Voice::all()->keyBy('name')->toArray();
        $user_id = User::where('email','=','benjenkinsv95@gmail.com')->pluck('id')->first();

        foreach($pronunciations as $voice) {

            if(!array_key_exists($voice[0],$existingVoices)) {
                $voice_id = Voice::where('name','=',$voice[1])->pluck('id')->first();

                $voice = Pronunciation::create([
                    'word' => $voice[0],
                    'user_id' => $user_id,
                    'voice_id' => $voice_id,
                ]);
            }
        }
    }
}
