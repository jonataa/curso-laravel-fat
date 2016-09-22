<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemons = \App\Pokemon::all();

        return view('pokemon.index', ['pokemons' => $pokemons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $name = $request->input('name');
        $desc = $request->input('description');
        
        $pokemon = new \App\Pokemon;
        
        $pokemon->name = $name;
        $pokemon->description = $desc;

        if ($pokemon->save()) {
            return redirect()->route('pokemons.index')->with('success', 'Seu pokemon foi salvo com sucesso!');
        }

        return redirect()->route('pokemons.index')->with('error', 'Erro ao tentar salvar seu pokemon!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pokemon = \App\Pokemon::find($id);
        return view('pokemon.edit', ['pokemon' => $pokemon]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $desc = $request->input('description');
        
        $pokemon = \App\Pokemon::find($id);
        
        $pokemon->name = $name;
        $pokemon->description = $desc;

        if ($pokemon->save()) {
            return redirect()->route('pokemons.index')->with('success', 'Seu pokemon foi salvo com sucesso!');
        }

        return redirect()->route('pokemons.index')->with('error', 'Erro ao tentar salvar seu pokemon!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
