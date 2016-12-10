@extends('layouts.app')

@section('title', 'Text-to-Phonetics Engine')
@section('description', 'Create better pronunciations easier.')

@section('content')
    <h2>TODO(ben): Welcome</h2>
    <p>TODO(ben): Application description. Continually whiteboard just in time testing procedures through leveraged products. Globally integrate cutting-edge processes and alternative testing procedures. Monotonectally deploy parallel scenarios through functional niche markets.</p>

    <div class="row">
        <div class="col-sm-6">
            <a href="{{ URL::route('pronunciations.index') }}" class="btn
            btn-primary btn-block">View Pronunciations</a>
        </div>
        <div class="col-sm-6">
            <a href="https://acapela-box.com/AcaBox/index.php"
               class="btn btn-default btn-block">Acapela Speech Demo</a>
        </div>
    </div>

@endsection

@section('footer')
    <script type="text/javascript" src="/js/home.js"></script>
@endsection