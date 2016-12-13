@extends('layouts.app')

@section('title')
    Edit {{ $voice->name }}
@stop

@section('breadcrumbs')
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/voices">Voices</a></li>
        <li class="active">{{ $voice->name }}</li>
    </ul>
@endsection

@section('content')
    <form method='POST' action='/voices/{{ $voice->id }}/edit'>

        {{ method_field('PUT') }}

        {{ csrf_field() }}

        <div class='form-group'>
            <label>Name</label>
            <input
                    type='text'
                    id='name'
                    name='name'
                    value='{{ old('name', $voice->name) }}'
            >
            @if($errors->first('name'))
                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
            @endif
        </div>

        {{--TODO(ben): Dropdown of previously used languages would be nice--}}
        <div class='form-group'>
            <label>Language</label>
            <input
                    type='text'
                    id='language'
                    name='language'
                    value='{{ old('language', 'English (USA)', $voice->language) }}'
            >
            @if($errors->first('language'))
                <div class="alert alert-danger">{{ $errors->first('language') }}</div>
            @endif
        </div>


        <div class='form-instructions'>
            All fields are required
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

        <div class='error'>
            @if(count($errors) > 0)
                Correct errors before submitting.
            @endif
        </div>

    </form>
@endsection