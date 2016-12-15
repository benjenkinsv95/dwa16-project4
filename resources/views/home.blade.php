@extends('layouts.app')

@section('title', 'Text2Phonetics Engine')
@section('description', 'Create better pronunciations easier.')

@section('content')
    <h2>Welcome!</h2>
    <p>This site is dedicated to cataloging and building phonetic pronunciations for the Acapela Group text-to-speech voices.</p>
    <p>View, edit, and create pronunciations then try playing them back with the Acapela Speech Demo.</p>
    <h3>Check out the getting started page to learn more.</h3>


    <div class="row">
        <div class="col-sm-6">
            <a href="{{ URL::route('pronunciations.index') }}" class="btn
            btn-default btn-block">View Pronunciations</a>
            <br>
        </div>

        <div class="col-sm-6">
            <a href="{{ URL::route('getting_started.index') }}" class="btn
            btn-primary btn-block">Getting Started</a>
            <br>
        </div>
    </div>

@endsection