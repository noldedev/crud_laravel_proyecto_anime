@extends('layouts.master')
@section('title', 'Animes')
@section('contenido')
    <div class="container">
        <h1 class="text-center">Animes</h1>
        <div class="text-center">
            <a href="{{ url('/animes/create') }}">Registrar Anime</a>
            <table class="table table-bordered w-100  mx-auto">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Personajes</th>
                        <th>Fecha de Publicación</th>
                        <th>Capítulos</th>
                        <th>Estado</th>
                        <th>Calificación</th>
                        <th>Autor</th>
                        <th>Estudio de Producción</th>
                        <th>Enlace</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($animeDb as $anime)
                        <tr>
                            <td>{{ $anime->anime_id }}</td>
                            <td>{{ $anime->nombre }}</td>
                            <td>{{ $anime->descripcion }}</td>
                            <td>{{ $anime->personajes }}</td>
                            <td>{{ $anime->fechapublicacion }}</td>
                            <td>{{ $anime->capitulos }}</td>
                            <td>{{ $anime->estado }}</td>
                            <td>{{ $anime->calificacion }}</td>
                            <td>{{ $anime->autor }}</td>
                            <td>{{ $anime->estudioproduccion }}</td>
                            <td>{{ $anime->enlace }}</td>
                            <td>
                                <a href="{{ route('animes.edit', $anime) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
