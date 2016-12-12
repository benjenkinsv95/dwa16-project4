@extends('layouts.app')

@section('title')
    Pronunciation: {{ $pronunciation->word }}
@endsection

@section('breadcrumbs')
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/pronunciations">Pronunciations</a></li>
        <li class="active">{{ $pronunciation->word }}</li>
    </ul>
@endsection

@section('content')
    <h3>Acapela Tag</h3>
    {{ $pronunciation->getAcapelaTag() }}

    <h3>Voice</h3>
    {{ $pronunciation->voice->name }}

    <h3>Creator</h3>
    {{$pronunciation->user->name }}

    <br>
    <a class='button' href='/pronunciations/{{ $pronunciation->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
    <form method='POST' action='/pronunciations/{{ $pronunciation->id }}'>
        {{ csrf_field() }}
        <button class='btn btn-link' type="submit">
            <i class='fa fa-trash'></i> Delete</button>
    </form>


@endsection