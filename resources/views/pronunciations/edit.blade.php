@extends('layouts.app')

@section('title')
    Edit {{ $pronunciation->word }}
@endsection

@section('breadcrumbs')
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/pronunciations">Pronunciations</a></li>
        <li class="active">{{ $pronunciation->word }}</li>
    </ul>
@endsection

@section('content')
    <form class="col-xs-12 col-md-8" method='POST' action='/pronunciations/{{ $pronunciation->id }}/edit'>

        {{ method_field('PUT') }}

        {{ csrf_field() }}
        <fieldset>
            <div class="row">

                <div class="col-xs-12 col-sm-6">
                    <div class='form-group'>
                        <label class="control-label">Voice</label>
                        <select class="form-control" name='voice_id'>
                            @foreach($voices_for_dropdown as $voice_id => $voice)
                                <option
                                        {{ ($voice_id == $pronunciation->voice->id) ? 'SELECTED' : '' }}
                                        value='{{ $voice_id }}'
                                >{{ $voice }}</option>
                            @endforeach
                        </select>
                        @if($errors->first('voice_id'))
                            <div class="alert alert-danger">{{ $errors->first('voice_id') }}</div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class='form-group'>
                        <label class="control-label">Word</label>
                        <input
                                class="form-control"
                                type='text'
                                id='word'
                                name='word'
                                value='{{ old('word', $pronunciation->word) }}'
                        >
                        @if($errors->first('word'))
                            <div class="alert alert-danger">{{ $errors->first('word') }}</div>
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class='form-group'>
                        <label class="control-label">Phonemes</label>
                        <input
                                class="form-control"
                                type='text'
                                id='phonemes'
                                name='phonemes'
                                value='{{ old('phonemes', $pronunciation->getPhonemesString()) }}'
                        >
                        @if($errors->first('phonemes'))
                            <div class="alert alert-danger">{{ $errors->first('phonemes') }}</div>
                        @endif
                    </div>
                </div>
            </div>

            <div class='form-instructions'>
                All fields are required
                <br>
                <br>
            </div>

            <div class="col-xs-12 col-sm-6">
                <div class='form-group'>
                    <button type="submit" class="form-control btn btn-primary btn-block">Edit pronunciation</button>
                </div>
            </div>

            <div class='error'>
                @if(count($errors) > 0)
                    Correct errors before submitting.
                @endif
            </div>
        </fieldset>

    </form>
@endsection