@extends('layouts.app')

@section('title', 'Getting Started')

@section('content')

    <div class="row container">
        <h2>To listen to a pronunciation</h2>

        <h3>Visit the <a href="{{ URL::route('pronunciations.index') }}">pronunciations page</a> and copy a pronunciation.</h3>
        <img src="/home/images/example_pronunciation.png" />
        <br>
    </div>

    <div class="row container">
        <h3>Into the <a href="https://acapela-box.com/AcaBox/index.php">Acapela Speech Demo's</a> textbox.</h3>
        <img src="/home/images/add_pronunciation.png" />
        <br>
    </div>

    <div class="row container">
        <h3>Then select the pronunciation's voice.</h3>
        <img src="/home/images/select_voice.png" />
        <br>
        <br>
    </div>

    <div class="row container">
        <h3>Agree to the terms and conditions and press play.</h3>
        <p>You should now hear the Acapela voice pronouncing the word you chose.</p>
    </div>

@endsection