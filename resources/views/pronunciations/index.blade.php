@extends('layouts.app')

@section('title', 'All pronunciations')
@section('description', 'Listing of pronunciations.')

@section('content')
    @if(count($pronunciations) == 0)
        You have not added any pronunciations, you can <a href='/pronunciations/create'>add a pronunciation now to get started</a>.
    @else
        <div id='pronunciations' class='cf'>
            @foreach($pronunciations as $pronunciation)

                <section class='pronunciation'>
                    <h2 class='truncate'><a href='/pronunciations/{{ $pronunciation->id }}'>{{ $pronunciation->word }}</a> for <a href='/voices/{{ $pronunciation->voice->id }}'>{{ $pronunciation->voice->name }}</a></h2>


                    {{--TODO possibly delete--}}
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

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Acapela Pronunciation Tag</h3>
                        </div>
                        <div class="panel-body">
                            {{ $pronunciation->getAcapelaTag() }}
                        </div>
                    </div>

                    <a class='button' href='/pronunciations/{{ $pronunciation->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
                    <a class='button' href='/pronunciations/{{ $pronunciation->id }}'><i class='fa fa-eye'></i> View</a>
                    <a class='button' href='/pronunciations/{{ $pronunciation->id }}/delete'><i class='fa fa-trash'></i> Delete</a>
                </section>
            @endforeach
        </div>
    @endif
@endsection