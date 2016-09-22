@extends('layouts.app')

@section('content')

	<h1>Meus Pokemons</h1>

	@if (session('success'))	
	    <div class="alert alert-success">
	        {{ session('success') }}
	    </div>
	@endif

	@if (session('error'))
	    <div class="alert alert-error">
	        {{ session('error') }}
	    </div>
	@endif

	<a href="{{ route('pokemons.create') }}">Cadastrar Pokemon</a>

	<table>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th></th>
		</tr>
		
		@foreach ($pokemons as $pokemon)
		    <tr>
				<td>{{ $pokemon->id }}</td>
				<td>{{ $pokemon->name }}</td>
				<td>{{ $pokemon->description }}</td>
				<td><a href="{{ route('pokemons.edit', $pokemon->id) }}">Editar</a></td>
			</tr>
		@endforeach		

	</table>

@endsection