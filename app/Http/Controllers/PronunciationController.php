<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        return view('pronunciations.store');
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
        return view('pronunciations.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return view('pronunciations.update');
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
