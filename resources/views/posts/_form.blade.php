<div class="form-group">
    <label for="title">Título</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ $movie->title }}">
</div>

<div class="form-group">
    <label for="year">Año</label>
    <input type="text" name="year" id="year" class="form-control" value="{{ $movie->year }}">
</div>

<div class="form-group">
    <label for="director">Director</label>
    <input type="text" name="director" id="director" class="form-control" value="{{ $movie->director }}">
</div>

<div class="form-group">
    <label for="poster">Url Imagen</label>
    <input type="url" name="image" id="image" class="form-control" value="{{ $movie->poster }}">
</div>

 <div class="form-group">
    <label for="synopsis">Resumen</label>
    <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea value="{{ $movie->synopsis }}">
 </div>

 <div class="text-center form-group">
    <button type="submit" value="Enviar" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
        Añadir película
    </button>
 </div>

 <div>
    <a href="{{ route('catalog.index') }}" class="px-4 py-2 text-white bg-gray-800 rounded">Volver</a>

 </div>
</div>
