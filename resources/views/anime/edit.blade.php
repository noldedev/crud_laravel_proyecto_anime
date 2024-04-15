@extends('layouts.master')
@section('title', 'Editar Anime')
@section('contenido')
    <div class="container">
        <h1 class="text-center">Editar Anime</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('animes.update', $anime) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $anime->nombre }}">
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ $anime->descripcion }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="personajes">Personajes:</label>
                        <textarea class="form-control" id="personajes" name="personajes" rows="3">{{ $anime->personajes }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="fechapublicacion">Fecha de Publicación:</label>
                        <input type="date" class="form-control" id="fechapublicacion" name="fechapublicacion"
                            value="{{ $anime->fechapublicacion }}">
                    </div>

                    <div class="form-group">
                        <label for="capitulos">Capítulos:</label>
                        <input type="number" class="form-control" id="capitulos" name="capitulos"
                            value="{{ $anime->capitulos }}">
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <input type="text" class="form-control" id="estado" name="estado"
                            value="{{ $anime->estado }}">
                        <small id="estadoHelp" class="form-text text-muted">Escribe el estado del anime (por ejemplo, "En
                            emisión" o "Finalizado").</small>
                    </div>

                    <div class="form-group">
                        <label for="calificacion">Calificación:</label>
                        <input type="number" step="0.1" class="form-control" id="calificacion" name="calificacion"
                            value="{{ $anime->calificacion }}">
                    </div>

                    <div class="form-group">
                        <label for="autor">Autor:</label>
                        <input type="text" class="form-control" id="autor" name="autor"
                            value="{{ $anime->autor }}">
                    </div>

                    <div class="form-group">
                        <label for="estudioproduccion">Estudio de Producción:</label>
                        <input type="text" class="form-control" id="estudioproduccion" name="estudioproduccion"
                            value="{{ $anime->estudioproduccion }}">
                    </div>

                    <div class="form-group">
                        <label for="enlace">Enlace:</label>
                        <input type="text" class="form-control" id="enlace" name="enlace"
                            value="{{ $anime->enlace }}">
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <button type="button" class="btn btn-dark"
                            onclick="location.href='{{ url('/animes') }}'">Regresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
