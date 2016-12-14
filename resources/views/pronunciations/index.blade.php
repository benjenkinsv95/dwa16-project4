@extends('layouts.app')

@section('title', 'Pronunciations')

@section('breadcrumbs')
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Pronunciations</li>
    </ul>
@endsection

@section('content')
    <div class="row container">
        @if(count($pronunciations) == 0)
            You have not added any pronunciations, you can <a href='/pronunciations/create'>add a pronunciation now to get started</a>.
            <a href="/pronunciations/create" class="btn btn-primary
                pull-right">Add Pronunciation</a>
        @else
            <div id='pronunciations' class='cf'>

                <table class="tags table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th>Word</th>
                        <th>Pronunciation</th>
                        <th class="hidden-xs">Voice</th>
                        <th class="hidden-xs">Creator</th>
                        <th>View</th>
                        <th class="hidden-xs">Edit</th>
                        <th class="hidden-xs">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pronunciations as $pronunciation)
                         <tr>


                            <td>{{ $pronunciation->word }}</td>
                            <td>{{ $pronunciation->getAcapelaTag() }}</td>
                            <td class="hidden-xs"><a class='btn btn-link' href='/voices/{{
                            $pronunciation->voice->id }}'>{{ $pronunciation->voice->name }}</a></td>
                            <td class="hidden-xs"><i class='fa fa-user'></i> {{ $pronunciation->user->name }}</td>
                            <td><a class='btn btn-link' href='/pronunciations/{{ $pronunciation->id }}'><i class='fa fa-eye'></i> View</a></td>
                             <td class="hidden-xs"><a class='btn btn-link' href='/pronunciations/{{ $pronunciation->id }}/edit'><i class='fa fa-pencil'></i> Edit</a></td>
                            <td class="hidden-xs">
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
                pull-right">Add Pronunciation</a>
            </div>
        @endif
    </div>
    <br>
@endsection