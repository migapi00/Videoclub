@extends('layouts.master')

@section('content')

<div class="flex justify-center">
    <div class="flex flex-col bg-white rounded-lg shadow-lg dark:bg-neutral-700 md:max-w-xl md:flex-row">
                <img class="object-cover w-full h-auto max-w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                src="{{ $movies['poster'] }}" alt="" />

    <div class="flex justify-center">
        <div class="flex flex-col justify-start p-6">
            <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
                {{ $movies['title'] }}
            </h5>
            <p class="text-xs text-neutral-500 dark:text-neutral-300">
                Año: {{ $movies['year'] }}
            </p>
            <p class="text-xs text-neutral-500 dark:text-neutral-300">
                Director: {{ $movies['director'] }}
            </p>

            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                Resumen: {{ $movies['synopsis'] }}
            </p>
        </div>
    </div>
    </div>
</div>
        <button type="button" class="btn btn-primary">Devolver Película</button>
        <button type="button" class="btn btn-secondary">Editar Película</button>

        <a class="nav-link" href="{{url('/catalog')}}">
            <button type="button" class="btn btn-secondary">Volver Listado</button>
        </a>




@endsection


    {{-- <div class="row">

        <div class="col-sm-4">

            <div class="row">

                <a href="{{ url('/catalog/show/') }}">
                    <img class="h-auto max-w-full" src="{{ $arrayPeliculas['poster'] }}" style="height:200px" />
                </a>

            </div>

            <div class="col-sm-8">

                <h2 style="min-height:45px;margin:5px 0 10px 0">
                    {{ $arrayPeliculas['title'] }}
                </h2>
                <p> Año: {{ $arrayPeliculas['year'] }}</p>
                <p> Director: {{ $arrayPeliculas['director'] }}</p>
                <p> Resumen: {{ $arrayPeliculas['synopsis'] }}</p>
            </div>
        </div> --}}
