@extends('layouts.app')

@section('title', 'Voices')

@section('breadcrumbs')
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Voices</li>
    </ul>
@endsection

@section('content')
    <div class="row container">
        @if(count($voices) == 0)
            <p>You have not added any voices, you can add a voice now to get started.</p>
            <a href="/voices/create" class="btn btn-primary
                pull-right">Add Voice</a>
        @else
            <div id='voices' class='cf'>

                <table class="tags table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th>Voice</th>
                        <th class="hidden-xs">Language</th>
                        <th class="hidden-xs">Creator</th>
                        <th>View</th>
                        <th class="hidden-xs">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($voices as $voice)
                        <tr>
                            <td><a class='btn btn-link' href='/voices/{{
                            $voice->id }}'>{{ $voice->name }}</a></td>
                            <td class="hidden-xs">{{ $voice->language }}</td>
                            <td class="hidden-xs"><i class='fa fa-user'></i> {{ $voice->user->name }}</td>
                            <td><a class='btn btn-link' href='/voices/{{ $voice->id }}'><i class='fa fa-eye'></i> View</a></td>
                            <td class="hidden-xs"><a class='btn btn-link' href='/voices/{{ $voice->id }}/edit'><i class='fa fa-pencil'></i> Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <a href="/voices/create" class="btn btn-primary
                pull-right">Add Voice</a>
            </div>
        @endif
    </div>
    <br>
@endsection