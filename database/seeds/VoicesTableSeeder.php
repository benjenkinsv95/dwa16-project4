<?php

use App\User;
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

        $voices = array(
            array("Language"=>"Arabic (Saudi Arabia)","Name"=>"Leila","Gender"=>"F"),
            array("Language"=>"Arabic (Saudi Arabia)","Name"=>"Mehdi","Gender"=>"M"),
            array("Language"=>"Arabic (Saudi Arabia)","Name"=>"Nizar","Gender"=>"M"),
            array("Language"=>"Arabic (Saudi Arabia)","Name"=>"Salma","Gender"=>"F"),
            array("Language"=>"Catalan (Spain)","Name"=>"Laia","Gender"=>"F"),
            array("Language"=>"Chinese (Mandarin)","Name"=>"Lulu","Gender"=>"F"),
            array("Language"=>"Czech","Name"=>"Eliska","Gender"=>"F"),
            array("Language"=>"Danish","Name"=>"Mette","Gender"=>"F"),
            array("Language"=>"Danish","Name"=>"Rasmus","Gender"=>"M"),
            array("Language"=>"Dutch (Belgium)","Name"=>"Jeroen","Gender"=>"M"),
            array("Language"=>"Dutch (Belgium)","Name"=>"JeroenHappy","Gender"=>"M"),
            array("Language"=>"Dutch (Belgium)","Name"=>"JeroenSad","Gender"=>"M"),
            array("Language"=>"Dutch (Belgium)","Name"=>"Sofie","Gender"=>"F"),
            array("Language"=>"Dutch (Belgium)","Name"=>"Zoe","Gender"=>"F"),
            array("Language"=>"Dutch (Netherlands)","Name"=>"Daan","Gender"=>"M"),
            array("Language"=>"Dutch (Netherlands)","Name"=>"Femke","Gender"=>"F"),
            array("Language"=>"Dutch (Netherlands)","Name"=>"Jasmijn","Gender"=>"F"),
            array("Language"=>"Dutch (Netherlands)","Name"=>"Max","Gender"=>"M"),
            array("Language"=>"English (Australia)","Name"=>"Lisa","Gender"=>"F"),
            array("Language"=>"English (Australia)","Name"=>"Tyler","Gender"=>"M"),
            array("Language"=>"English (India)","Name"=>"Deepa","Gender"=>"F"),
            array("Language"=>"English (Scotland)","Name"=>"Rhona","Gender"=>"F"),
            array("Language"=>"English (UK)","Name"=>"Graham","Gender"=>"M"),
            array("Language"=>"English (UK)","Name"=>"Lucy","Gender"=>"F"),
            array("Language"=>"English (UK)","Name"=>"Nizareng","Gender"=>"M"),
            array("Language"=>"English (UK)","Name"=>"Peter","Gender"=>"M"),
            array("Language"=>"English (UK)","Name"=>"PeterHappy","Gender"=>"M"),
            array("Language"=>"English (UK)","Name"=>"PeterSad","Gender"=>"M"),
            array("Language"=>"English (UK)","Name"=>"QueenElizabeth","Gender"=>"F"),
            array("Language"=>"English (UK)","Name"=>"Rachel","Gender"=>"F"),
            array("Language"=>"English (USA)","Name"=>"Josh","Gender"=>"M"),
            array("Language"=>"English (USA)","Name"=>"Karen","Gender"=>"F"),
            array("Language"=>"English (USA)","Name"=>"Kenny","Gender"=>"M"),
            array("Language"=>"English (USA)","Name"=>"Laura","Gender"=>"F"),
            array("Language"=>"English (USA)","Name"=>"Micah","Gender"=>"M"),
            array("Language"=>"English (USA)","Name"=>"Nelly","Gender"=>"F"),
            array("Language"=>"English (USA)","Name"=>"Rod","Gender"=>"M"),
            array("Language"=>"English (USA)","Name"=>"Ryan","Gender"=>"M"),
            array("Language"=>"English (USA)","Name"=>"Saul","Gender"=>"M"),
            array("Language"=>"English (USA)","Name"=>"Sharon","Gender"=>"F"),
            array("Language"=>"English (USA)","Name"=>"Tracy","Gender"=>"F"),
            array("Language"=>"English (USA)","Name"=>"Will","Gender"=>"M"),
            array("Language"=>"English (USA)","Name"=>"WillBadGuy","Gender"=>"M"),
            array("Language"=>"English (USA)","Name"=>"WillFromAfar","Gender"=>"M"),
            array("Language"=>"English (USA)","Name"=>"WillHappy","Gender"=>"M"),
            array("Language"=>"English (USA)","Name"=>"WillLittleCreature","Gender"=>"M"),
            array("Language"=>"English (USA)","Name"=>"WillOldMan","Gender"=>"M"),
            array("Language"=>"English (USA)","Name"=>"WillSad","Gender"=>"M"),
            array("Language"=>"English (USA)","Name"=>"WillUpClose","Gender"=>"M"),
            array("Language"=>"Faroese","Name"=>"Hanna","Gender"=>"F"),
            array("Language"=>"Faroese","Name"=>"Hanus","Gender"=>"M"),
            array("Language"=>"Finnish","Name"=>"Sanna","Gender"=>"F"),
            array("Language"=>"French (Belgium)","Name"=>"Alice-BE","Gender"=>"F"),
            array("Language"=>"French (Belgium)","Name"=>"Antoine-BE","Gender"=>"M"),
            array("Language"=>"French (Belgium)","Name"=>"AntoineFromAfar-BE","Gender"=>"M"),
            array("Language"=>"French (Belgium)","Name"=>"AntoineHappy-BE","Gender"=>"M"),
            array("Language"=>"French (Belgium)","Name"=>"AntoineSad-BE","Gender"=>"M"),
            array("Language"=>"French (Belgium)","Name"=>"AntoineUpClose-BE","Gender"=>"M"),
            array("Language"=>"French (Belgium)","Name"=>"Bruno-BE","Gender"=>"M"),
            array("Language"=>"French (Belgium)","Name"=>"Claire-BE","Gender"=>"F"),
            array("Language"=>"French (Belgium)","Name"=>"Elise-BE","Gender"=>"F"),
            array("Language"=>"French (Belgium)","Name"=>"Julie-BE","Gender"=>"F"),
            array("Language"=>"French (Belgium)","Name"=>"Justine","Gender"=>"F"),
            array("Language"=>"French (Belgium)","Name"=>"Manon-BE","Gender"=>"F"),
            array("Language"=>"French (Belgium)","Name"=>"Margaux-BE","Gender"=>"F"),
            array("Language"=>"French (Belgium)","Name"=>"MargauxHappy-BE","Gender"=>"F"),
            array("Language"=>"French (Belgium)","Name"=>"MargauxSad-BE","Gender"=>"F"),
            array("Language"=>"French (Belgium)","Name"=>"Robot-BE","Gender"=>"M"),
            array("Language"=>"French (Belgium)","Name"=>"Valentin-BE","Gender"=>"M"),
            array("Language"=>"French (Canada)","Name"=>"Louise","Gender"=>"F"),
            array("Language"=>"French (France)","Name"=>"Alice","Gender"=>"F"),
            array("Language"=>"French (France)","Name"=>"Anais","Gender"=>"F"),
            array("Language"=>"French (France)","Name"=>"Antoine","Gender"=>"M"),
            array("Language"=>"French (France)","Name"=>"AntoineFromAfar","Gender"=>"M"),
            array("Language"=>"French (France)","Name"=>"AntoineHappy","Gender"=>"M"),
            array("Language"=>"French (France)","Name"=>"AntoineSad","Gender"=>"M"),
            array("Language"=>"French (France)","Name"=>"AntoineUpClose","Gender"=>"M"),
            array("Language"=>"French (France)","Name"=>"Bruno","Gender"=>"M"),
            array("Language"=>"French (France)","Name"=>"Claire","Gender"=>"F"),
            array("Language"=>"French (France)","Name"=>"Elise","Gender"=>"F"),
            array("Language"=>"French (France)","Name"=>"Julie","Gender"=>"F"),
            array("Language"=>"French (France)","Name"=>"Manon","Gender"=>"F"),
            array("Language"=>"French (France)","Name"=>"Margaux","Gender"=>"F"),
            array("Language"=>"French (France)","Name"=>"MargauxHappy","Gender"=>"F"),
            array("Language"=>"French (France)","Name"=>"MargauxSad","Gender"=>"F"),
            array("Language"=>"French (France)","Name"=>"Robot","Gender"=>"M"),
            array("Language"=>"French (France)","Name"=>"Valentin","Gender"=>"M"),
            array("Language"=>"German","Name"=>"Andreas","Gender"=>"M"),
            array("Language"=>"German","Name"=>"Claudia","Gender"=>"F"),
            array("Language"=>"German","Name"=>"ClaudiaSmile","Gender"=>"F"),
            array("Language"=>"German","Name"=>"Julia","Gender"=>"F"),
            array("Language"=>"German","Name"=>"Klaus","Gender"=>"M"),
            array("Language"=>"German","Name"=>"Sarah","Gender"=>"F"),
            array("Language"=>"Greek","Name"=>"Dimitris","Gender"=>"M"),
            array("Language"=>"Greek","Name"=>"DimitrisHappy","Gender"=>"M"),
            array("Language"=>"Greek","Name"=>"DimitrisSad","Gender"=>"M"),
            array("Language"=>"Italian","Name"=>"Chiara","Gender"=>"F"),
            array("Language"=>"Italian","Name"=>"Fabiana","Gender"=>"F"),
            array("Language"=>"Italian","Name"=>"Vittorio","Gender"=>"M"),
            array("Language"=>"Japanese","Name"=>"Sakura","Gender"=>"F"),
            array("Language"=>"Korean","Name"=>"Minji","Gender"=>"F"),
            array("Language"=>"Norwegian","Name"=>"Bente","Gender"=>"F"),
            array("Language"=>"Norwegian","Name"=>"Elias","Gender"=>"M"),
            array("Language"=>"Norwegian","Name"=>"Emilie","Gender"=>"F"),
            array("Language"=>"Norwegian","Name"=>"Kari","Gender"=>"F"),
            array("Language"=>"Norwegian","Name"=>"Olav","Gender"=>"M"),
            array("Language"=>"Polish","Name"=>"Ania","Gender"=>"F"),
            array("Language"=>"Polish","Name"=>"Monika","Gender"=>"F"),
            array("Language"=>"Portuguese (Brazil)","Name"=>"Marcia","Gender"=>"F"),
            array("Language"=>"Portuguese (Portugal)","Name"=>"Celia","Gender"=>"F"),
            array("Language"=>"Russian","Name"=>"Alyona","Gender"=>"F"),
            array("Language"=>"Scanian (Sweden)","Name"=>"Mia","Gender"=>"F"),
            array("Language"=>"Spanish (Spain)","Name"=>"Antonio","Gender"=>"M"),
            array("Language"=>"Spanish (Spain)","Name"=>"Ines","Gender"=>"F"),
            array("Language"=>"Spanish (Spain)","Name"=>"Maria","Gender"=>"F"),
            array("Language"=>"Spanish (USA)","Name"=>"Rodrigo","Gender"=>"M"),
            array("Language"=>"Spanish (USA)","Name"=>"Rosa","Gender"=>"F"),
            array("Language"=>"Swedish","Name"=>"Elin","Gender"=>"F"),
            array("Language"=>"Swedish","Name"=>"Emil","Gender"=>"M"),
            array("Language"=>"Swedish","Name"=>"Emma","Gender"=>"F"),
            array("Language"=>"Swedish","Name"=>"Erik","Gender"=>"M"),
            array("Language"=>"Swedish","Name"=>"Filip","Gender"=>"M"),
            array("Language"=>"Swedish","Name"=>"Freja","Gender"=>"F"),
            array("Language"=>"Swedish (Finland)","Name"=>"Samuel","Gender"=>"M"),
            array("Language"=>"Swedish - Gothenburg (Sweden)","Name"=>"Kal","Gender"=>"M"),
            array("Language"=>"Turkish","Name"=>"Ipek","Gender"=>"F")
        );

        $existingVoices = Voice::all()->keyBy('name')->toArray();
        $user_id = User::where('email','=','benjenkinsv95@gmail.com')->pluck('id')->first();

        foreach($voices as $voice) {

            if(!array_key_exists($voice["Name"],$existingVoices)) {
                $voice = Voice::create([
                    'name' => $voice["Name"],
                    'language' => $voice["Language"],
                    'user_id' => $user_id,
                ]);
            }
        }
    }
}
