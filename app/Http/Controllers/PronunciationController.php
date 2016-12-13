<?php

namespace App\Http\Controllers;

use App\Http\Requests\PronunciationRequest;
use App\Phoneme;
use App\Pronunciation;
use App\Voice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PronunciationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pronunciations = Pronunciation::all()->sortBy('word');

        return view('pronunciations.index')->with([
            'pronunciations' => $pronunciations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $voices_for_dropdown = Voice::getForDropdown();
        
        return view('pronunciations.create')->with([
            'voices_for_dropdown' => $voices_for_dropdown
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PronunciationRequest $request)
    {
        $pronunciation = new Pronunciation();
        $pronunciation->voice_id = $request->voice_id;
        $pronunciation->word = $request->input('word');
        $pronunciation->user_id = $request->user()->id;
        $pronunciation->save();

        $phonemeStrings = preg_split('/\s+/', $request->input('phonemes'));
        $count = count($phonemeStrings);

        for($order = 0; $order < $count; $order++){
            $phoneme = new Phoneme();
            $phoneme->order = $order;

            $lastChar = substr($phonemeStrings[$order], -1, 1);

            if(is_numeric($lastChar)){
                $stress_level = $lastChar;
                $sound = substr($phonemeStrings[$order], 0, count($phonemeStrings[$order] - 1));
            }else{
                $stress_level = 0;
                $sound = $phonemeStrings[$order];
            }

            $phoneme->stress_level = $stress_level;
            $phoneme->sound = $sound;
            $phoneme->pronunciation_id = $pronunciation->id;
            $phoneme->save();
        }

        Session::flash('flash_message', 'Your pronunciation ' . $pronunciation->word . ' is ' . $pronunciation->getAcapelaTag() . ' was added.');
        return redirect('/pronunciations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pronunciation = Pronunciation::find($id);

        if(is_null($pronunciation)) {
            Session::flash('message','Pronunciation not found');
            return redirect('/pronunciations');
        }

        return view('pronunciations.show')->with([
            'pronunciation' => $pronunciation,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voices_for_dropdown = Voice::getForDropdown();
        $pronunciation = Pronunciation::find($id);

        return view('pronunciations.edit')->with([
            'pronunciation' => $pronunciation,
            'voices_for_dropdown' => $voices_for_dropdown
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PronunciationRequest $request, $id)
    {
        $pronunciation = Pronunciation::find($id);
        $pronunciation->voice_id = $request->voice_id;
        $pronunciation->word = $request->input('word');
        $pronunciation->user_id = $request->user()->id;
        $pronunciation->save();

        # Delete existing phonemes
        foreach($pronunciation->phonemes as $phoneme){
            $phoneme->pronunciation_id = null;
            $phoneme->delete();
        }

        # Add new phonemes
        $phonemeStrings = preg_split('/\s+/', $request->input('phonemes'));
        $count = count($phonemeStrings);

        for($order = 0; $order < $count; $order++){
            $phoneme = new Phoneme();
            $phoneme->order = $order;

            $lastChar = substr($phonemeStrings[$order], -1, 1);

            if(is_numeric($lastChar)){
                $stress_level = $lastChar;
                $sound = substr($phonemeStrings[$order], 0, count($phonemeStrings[$order] - 1));
            }else{
                $stress_level = 0;
                $sound = $phonemeStrings[$order];
            }

            $phoneme->stress_level = $stress_level;
            $phoneme->sound = $sound;
            $phoneme->pronunciation_id = $pronunciation->id;
            $phoneme->save();
        }

        Session::flash('flash_message', 'Your pronunciation ' . $pronunciation->word . ' is ' . $pronunciation->getAcapelaTag() . ' was updated.');
        return redirect('/pronunciations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * POST
     */
    public function destroy($id)
    {
        $pronunciation = Pronunciation::find($id);

        if(is_null($pronunciation)) {
            Session::flash('message','Pronunciation not found.');
            return redirect('/pronunciations');
        }

        $pronunciation->delete();

        Session::flash('flash_message', $pronunciation->word . ' was deleted.');
        return redirect('/pronunciations');
    }
}
