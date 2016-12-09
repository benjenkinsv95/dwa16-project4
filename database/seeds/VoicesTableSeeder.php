<?php

use App\Voice;
use Illuminate\Database\Seeder;

class VoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $voices = [
            ['Josh (Child)','English (USA)'],
            ['Will (FromAfar)','English (USA)'],
            ['Graham','English (UK)']
        ];

        $existingVoices = Voice::all()->keyBy('name')->toArray();
        $user_id = Author::where('email','=','benjenkinsv95@gmail.com')->pluck('id')->first();

        foreach($voices as $voice) {

            if(!array_key_exists($voice[0],$existingVoices)) {
                $voice = Voice::create([
                    'name' => $voice[0],
                    'language' => $voice[1],
                    'user_id' => $user_id,
                ]);
            }
        }
    }
}
