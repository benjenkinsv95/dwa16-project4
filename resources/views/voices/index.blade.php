@extends('layouts.app')

@section('title', 'Voices')

@section('breadcrumbs')
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Voices</li>
    </ul>
@endsection

@section('content')
    @if(count($voices) == 0)
        You have not added any voices, you can <a href='/voices/create'>add a voice now to get started</a>.
    @else
        <div id='voices' class='cf'>

            <table class="tags table table-striped table-hover ">
                <thead>
                <tr>
                    <th>Voice</th>
                    <th>Language</th>
                    <th>Creator</th>
                    <th>View</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($voices as $voice)
                    <tr>
                        <td><a class='btn btn-link' href='/voices/{{
                        $voice->id }}'>{{ $voice->name }}</a></td>
                        <td>{{ $voice->language }}</td>
                        <td>{{ $voice->user->name }}</td>
                        <td><a class='btn btn-link' href='/voices/{{ $voice->id }}'><i class='fa fa-eye'></i> View</a></td>
                        <td><a class='btn btn-link' href='/voices/{{ $voice->id }}/edit'><i class='fa fa-pencil'></i> Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <a href="/voices/create" class="btn btn-primary
            pull-right">Create</a>
        </div>
    @endif
@endsection