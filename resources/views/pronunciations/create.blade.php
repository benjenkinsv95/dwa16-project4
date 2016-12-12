@extends('layouts.app')

@section('title', 'Add a new pronunciation')

@section('breadcrumbs')
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/pronunciations">Pronunciations</a></li>
        <li class="active">Create</li>
    </ul>
@endsection

@section('content')
    <form method='POST' action='/pronunciations/create'>

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

        <button type="submit" class="btn btn-primary">Add pronunciation</button>

        <div class='error'>
            @if(count($errors) > 0)
                Correct errors before submitting.
            @endif
        </div>

    </form>
@endsection