@extends('layouts.app')

@section('title', 'Getting Started')

@section('content')

    <div class="row container">
        <h2>To listen to a pronunciation</h2>

        <h3>Visit the <a href="{{ URL::route('pronunciations.index') }}">pronunciations page</a> and copy a pronunciation</h3>
        <img class="img-responsive" alt="Word, pronunciation, and voice." src="/getting-started/images/example_pronunciation.png" />
        <br>
    </div>

    <div class="row container">
        <h3>Into the <a href="https://acapela-box.com/AcaBox/index.php">Acapela Speech Demo's</a> textbox</h3>
        <img class="img-responsive" alt="Pronunciation pasted into textbox." src="/getting-started/images/add_pronunciation.png" />
        <br>
    </div>

    <div class="row container">
        <h3>Then select the pronunciation's voice</h3>
        <img class="img-responsive hidden-xs" alt="Language English (USA) and Voice Josh (Child) selected" src="/getting-started/images/select_language_and_voice.png" />

        <img class="img-responsive visible-xs" alt="Language English (USA) selected" src="/getting-started/images/select_language.png" />
        <br>
        <img class="img-responsive visible-xs" alt="Voice Josh (Child) selected" src="/getting-started/images/select_voice.png" />
    </div>

    <div class="row container">
        <h3>Agree to the terms and conditions and press play</h3>
        <p>You should now hear the Acapela voice pronouncing the word you chose.</p>
    </div>

@endsection