<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVoiceRequest;
use App\Http\Requests\VoiceRequest;
use App\Voice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voices = Voice::all()->sortBy('name');

        return view('voices.index')->with([
            'voices' => $voices
        ]);
        return view('voices.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VoiceRequest $request)
    {
        $voice = new Voice();
        $voice->name = $request->input('name');
        $voice->language = $request->input('language');
        $voice->user_id = $request->user()->id;

        $voice->save();
        Session::flash('flash_message', 'The voice '.$voice->name.' was added.');
        return redirect('/voices');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voice = Voice::find($id);

        if(is_null($voice)) {
            Session::flash('message','Voice not found');
            return redirect('/voices');
        }

        $pronunciations = $voice->pronunciations;

        return view('voices.show')->with([
            'voice' => $voice,
            'pronunciations' => $pronunciations
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
        $voice = Voice::find($id);
        return view('voices.edit')->with(
            [
                'voice' => $voice
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VoiceRequest $request, $id)
    {
        $voice = Voice::find($id);
        $voice->name = $request->input('name');
        $voice->language = $request->input('language');

        $voice->save();
        Session::flash('flash_message', 'The changes to voice '.$voice->name.' were saved.');
        return redirect('/voices');
    }
}
