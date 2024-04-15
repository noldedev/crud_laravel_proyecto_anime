<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animeDb = Anime::all();
        return view("anime.index", compact("animeDb"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("anime.registrar");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $anime = new Anime();

        $anime->nombre = $request->nombre;
        $anime->descripcion = $request->descripcion;
        $anime->personajes = $request->personajes;
        $anime->fechapublicacion = $request->fechapublicacion;
        $anime->capitulos = $request->capitulos;
        $anime->estado = $request->estado;
        $anime->calificacion = $request->calificacion;
        $anime->autor = $request->autor;
        $anime->estudioproduccion = $request->estudioproduccion;
        $anime->enlace = $request->enlace;

        $anime->save();

        return redirect("/animes");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anime = Anime::find($id);

        return view("anime.edit", compact("anime"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anime = Anime::find($id);

        $anime->nombre = $request->nombre;
        $anime->descripcion = $request->descripcion;
        $anime->personajes = $request->personajes;
        $anime->fechapublicacion = $request->fechapublicacion;
        $anime->capitulos = $request->capitulos;
        $anime->estado = $request->estado;
        $anime->calificacion = $request->calificacion;
        $anime->autor = $request->autor;
        $anime->estudioproduccion = $request->estudioproduccion;
        $anime->enlace = $request->enlace;

        $anime->save();

        return redirect("/animes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
