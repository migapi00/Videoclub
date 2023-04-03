@extends('layouts.master')

@section('content')

    <div class="row">

            @foreach ($movies as $movie)
                <div class="text-center col-xs-6 col-sm-4 col-md-3 grid place-items-center">
                    <a href="{{ url('/catalog/show/' . $movie->id) }}">
                        <img src="{{ $movie['poster'] }}" style="height:200px" />
                        <h4 style="min-height:45px;margin:5px 0 10px 0">
                            {{ $movie['title'] }}
                        </h4>
                    </a>

                </div>

            @endforeach
            {{ $movies->links()}}

    </div>
@endsection
