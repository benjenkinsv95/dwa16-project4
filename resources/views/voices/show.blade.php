@extends('layouts.app')

@section('title')
    Voice: {{ $voice->name }}
@endsection

@section('breadcrumbs')
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/voices">Voices</a></li>
        <li class="active">{{ $voice->name }}</li>
    </ul>
@endsection

@section('content')
    <a href="/voices/{{ $voice->id }}/edit" class="btn btn-primary pull-right">Edit</a>

    <h2>Language</h2>
    {{ $voice->language }}



    @if(count($pronunciations) == 0)
        You have not added any pronunciations, you can <a href='/pronunciations/create'>add a pronunciation now to get started</a>.
    @else
        <h2>Pronunciations</h2>
        <div id='pronunciations' class='cf'>

            <table class="tags table table-striped table-hover ">
                <thead>
                <tr>
                    <th>Word</th>
                    <th>Pronunciation</th>
                    <th>Creator</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pronunciations as $pronunciation)
                    <tr>


                        <td>{{ $pronunciation->word }}</td>
                        <td>{{ $pronunciation->getAcapelaTag() }}</td>
                        <td>{{ $pronunciation->user->name }}</td>
                        <td><a class='btn btn-link' href='/pronunciations/{{ $pronunciation->id }}'><i class='fa fa-eye'></i> View</a></td>
                        <td><a class='btn btn-link' href='/pronunciations/{{ $pronunciation->id }}/edit'><i class='fa fa-pencil'></i> Edit</a></td>
                        <td>
                            <form method='POST' action='/pronunciations/{{ $pronunciation->id }}'>
                                {{ csrf_field() }}
                                <button class='btn btn-link' type="submit">
                                    <i class='fa fa-trash'></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <a href="/pronunciations/create" class="btn btn-primary
            pull-right">Create</a>
        </div>
    @endif
@endsection