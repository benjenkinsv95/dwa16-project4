@extends('layouts.app')

@section('title')
    Edit {{ $pronunciation->word }}
@endsection

@section('breadcrumbs')
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/pronunciations">Pronunciations</a></li>
        <li class="active">Edit</li>
    </ul>
@endsection

@section('content')
    <form method='POST' action='/pronunciations/{{ $pronunciation->id }}/edit'>

        {{ method_field('PUT') }}

        {{ csrf_field() }}

        <div class='form-group'>
            <label>Voice</label>
            <select name='voice_id'>
                @foreach($voices_for_dropdown as $voice_id => $voice)
                    <option
                            {{ ($voice_id == $pronunciation->voice->id) ? 'SELECTED' : '' }}
                            value='{{ $voice_id }}'
                    >{{ $voice }}</option>
                @endforeach
            </select>
        </div>

        <div class='form-group'>
            <label>Word</label>
            <input
                    type='text'
                    id='word'
                    name='word'
                    value='{{ old('word', $pronunciation->word) }}'
            >
            <div class='error'>{{ $errors->first('word') }}</div>
        </div>

        <div class='form-group'>
            <label>Phonemes</label>
            <input
                    type='text'
                    id='phonemes'
                    name='phonemes'
                    value='{{ old('phonemes', $pronunciation->getPhonemesString()) }}'
            >
            <div class='error'>{{ $errors->first('phonemes') }}</div>
        </div>



        {{--TODO Add phonemes builder if time--}}
        {{--<table class="tags table table-striped table-hover ">--}}
        {{--<thead>--}}
        {{--<tr>--}}
        {{--<th>#</th>--}}
        {{--<th>Phoneme</th>--}}
        {{--<th>Stress</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($pronunciation->phonemes as $phoneme)--}}
        {{--<tr>--}}
        {{--<td>{{ $phoneme->order }}</td>--}}
        {{--<td>{{ $phoneme->sound }}</td>--}}
        {{--<td>{{ $phoneme->stress_level }}</td>--}}
        {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
        {{--</table>--}}


        <div class='form-instructions'>
            All fields are required
        </div>

        <button type="submit" class="btn btn-primary">Edit pronunciation</button>

        <div class='error'>
            @if(count($errors) > 0)
                Correct errors before submitting.
            @endif
        </div>

    </form>
@endsection