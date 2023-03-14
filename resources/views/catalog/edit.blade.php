@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="text-center card-header">
             Añadir película
          </div>
          <div class="card-body" style="padding:30px">

            @include('posts._form') @method('PUT')
            @csrf
            {{-- TODO: Abrir el formulario e indicar el método POST --}}

             {{-- TODO: Protección contra CSRF --}}

             <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control">
             </div>

             <div class="form-group">
                <label for="year">Año</label>
                <input type="text" name="year" id="year" class="form-control">
             </div>

             <div class="form-group">
                <label for="director">Director</label>
                <input type="text" name="director" id="director" class="form-control">
             </div>

             <div class="form-group">
                {{-- TODO: Completa el input para el poster --}}
                <label for="poster">Url Imagen</label>
                <input type="url" name="image" id="image" class="form-control">
             </div>

             <div class="form-group">
                <label for="synopsis">Resumen</label>
                <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
             </div>

             <div class="text-center form-group">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                    Modificar película
                </button>
             </div>

             {{-- TODO: Cerrar formulario --}}

          </div>
       </div>
    </div>
 </div>


@endsection
