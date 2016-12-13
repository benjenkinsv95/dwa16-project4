@extends('layouts.app')

@section('title', 'Text-to-Phonetics Engine')
@section('description', 'Create better pronunciations easier.')

@section('content')
    <h2>Welcome!</h2>
    <p>This site is dedicated to cataloging and building phonetic pronunciations for the Acapela Group text-to-speech voices.</p>
    <p>View, edit, and create pronunciations then try playing them back with the <a href="https://acapela-box.com/AcaBox/index.php">Acapela Speech Demo</a>.</p>
    <br>

    <div class="row">
        <div class="col-sm-4">
            <a href="{{ URL::route('pronunciations.index') }}" class="btn
            btn-primary btn-block">View Pronunciations</a>
            <br>
        </div>
        <div class="col-sm-4">
            <a href="{{ URL::route('voices.index') }}" class="btn
            btn-primary btn-block">View Voices</a>
            <br>
        </div>
        <div class="col-sm-4">
            <a href="https://acapela-box.com/AcaBox/index.php"
               class="btn btn-primary btn-block">Acapela Speech Demo</a>
            <br>
        </div>
    </div>

@endsection

@section('footer')
    <script type="text/javascript" src="/js/home.js"></script>
@endsection