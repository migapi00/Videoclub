@extends('layouts.master')

@section('content')

<div class="flex justify-center">
    <div class="flex flex-col bg-white rounded-lg shadow-lg md:max-w-xl md:flex-row">
                <img class="object-cover w-full h-auto max-w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                src="{{ $movies['poster'] }}" alt="" />

    <div class="flex justify-center">
        <div class="flex flex-col justify-start p-6">
            <h5 class="mb-2 text-xl font-medium text-neutral-800">
                {{ $movies['title'] }}
            </h5>
            <p class="text-xs text-neutral-500">
                Año: {{ $movies['year'] }}
            </p>
            <p class="text-xs text-neutral-500">
                Director: {{ $movies['director'] }}
            </p>

            <p class="mb-4 text-base text-neutral-600">
                Resumen: {{ $movies['synopsis'] }}
            </p>
        </div>
    </div>
    </div>
</div>

<div class="flex items-center justify-center mt-4">

    <x-primary-button class="ml-3">
                  {{ __('Devolver la pelicula') }}
    </x-primary-button>

    <x-primary-button class="ml-3">
        {{ __('Editar Pelicula') }}
    </x-primary-button>

    <a class="nav-link" href="{{url('/catalog')}}">
        <x-primary-button class="ml-3">
            {{ __('Volver Catalogo') }}
        </x-primary-button>
    </a>

</div>

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
