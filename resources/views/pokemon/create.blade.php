@extends('layouts.app')

@section('content')

<h1>Cadastro de Pokemon</h1>

<form action="{{ route('pokemons.store') }}" method="POST">

	{{ csrf_field() }}
	
	<div>
		<label for="name">Nome</label>
		<input type="text" name="name" id="name">
	</div>

	<div>
		<label for="description">Descrição</label>
		<input type="text" name="description" id="description">
	</div>

	<input type="submit" value="Salvar">

</form>

@endsection