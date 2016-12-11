@extends('layouts.app')

@section('title', 'Pronunciations')

@section('content')
    @if(count($pronunciations) == 0)
        You have not added any pronunciations, you can <a href='/pronunciations/create'>add a pronunciation now to get started</a>.
    @else
        <div id='pronunciations' class='cf'>

            <table class="tags table table-striped table-hover ">
                <thead>
                <tr>
                    <th>Word</th>
                    <th>Pronunciation</th>
                    <th>Voice</th>
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
                        <td><a href='/voices/{{ $pronunciation->voice->id }}'>{{ $pronunciation->voice->name }}</a></td>
                        <td>{{ $pronunciation->user->name }}</td>
                        <td><a class='button' href='/pronunciations/{{ $pronunciation->id }}'><i class='fa fa-eye'></i> View</a></td>
                         <td><a class='button' href='/pronunciations/{{ $pronunciation->id }}/edit'><i class='fa fa-pencil'></i> Edit</a></td>
                         <td><a class='button' href='/pronunciations/{{ $pronunciation->id }}/delete'><i class='fa fa-trash'></i> Delete</a></td>
                     </tr>
                @endforeach
                </tbody>
            </table>

            <a href="/pronunciations/create" class="btn btn-primary
            pull-right">Create</a>
        </div>
    @endif
@endsection