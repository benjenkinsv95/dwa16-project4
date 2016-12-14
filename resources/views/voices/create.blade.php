@extends('layouts.app')

@section('title', 'Add voice')

@section('breadcrumbs')
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/voices">Voices</a></li>
        <li class="active">Create</li>
    </ul>
@endsection

@section('content')
    <form class="col-xs-12 col-md-8" method='POST' action='/voices/create'>
        {{ csrf_field() }}

        <fieldset>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class='form-group'>
                        <label class="control-label">Name</label>
                        <input
                                class="form-control"
                                type='text'
                                id='name'
                                name='name'
                                value='{{ old('name') }}'
                        >
                        @if($errors->first('name'))
                            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class='form-group'>
                        <label class="control-label">Language</label>
                        <select class="form-control" name='language'>
                            @foreach($languages_for_dropdown as $language)
                                <option
                                        {{ ($language === "English (USA)") ? 'SELECTED' : '' }}
                                        value='{{ $language }}'
                                >{{ $language }}</option>
                            @endforeach
                        </select>
                        @if($errors->first('language'))
                            <div class="alert alert-danger">{{ $errors->first('language') }}</div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class='form-instructions'>
                        All fields are required
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class='form-group'>
                        <button type="submit" class="form-control btn btn-primary btn-block">Add Voice</button>
                    </div>
                </div>

                <div class='error'>
                    @if(count($errors) > 0)
                        Correct errors before submitting.
                    @endif
                </div>
            </div>
        </fieldset>

    </form>
@endsection