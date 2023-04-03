@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="text-center card-header">
             Añadir película
          </div>
          <div class="card-body" style="padding:30px">
            {{-- TODO: Abrir el formulario e indicar el método POST --}}
            <form action="{{route('posts.store')}}" method="POST">
                @csrf
                @include('posts._form')

            </form>




          </div>
       </div>
    </div>
 </div>


@endsection
