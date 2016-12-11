@extends('layouts.app')

@section('title', 'Add a new pronunciation')

@section('content')
    <form method='POST' action='/pronunciations'>

        {{ csrf_field() }}

        <div class='form-group'>
            <label>Word</label>
            <input
                    type='text'
                    id='word'
                    name='word'
                    value='{{ old('word', 'Hello') }}'
            >
            <div class='error'>{{ $errors->first('word') }}</div>
        </div>

        <div class='form-group'>
            <label>Voice</label>
            <select name='voice_id'>
                @foreach($voices_for_dropdown as $voice_id => $voice)
                    <option
                            value='{{ $voice_id }}'
                    >{{ $voice }}</option>
                @endforeach
            </select>
        </div>

        {{--TODO Add phonemes--}}


        <div class='form-instructions'>
            All fields are required
        </div>

        <button type="submit" class="btn btn-primary">Add pronunciation</button>

        <div class='error'>
            @if(count($errors) > 0)
                Correct errors before submitting.
            @endif
        </div>

    </form>
@endsection