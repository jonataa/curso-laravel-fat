<h1>Cadastro de Pokemon</h1>

<form action="{{ route('pokemons.update', $pokemon->id) }}" method="POST">

	{{ csrf_field() }}

	{{ method_field('PUT') }}
	
	<div>
		<label for="name">Nome</label>
		<input type="text" name="name" id="name" value="{{ $pokemon->name }}">
	</div>

	<div>
		<label for="description">Descrição</label>
		<input type="text" name="description" id="description" value="{{ $pokemon->description }}">
	</div>

	<input type="submit" value="Salvar">

</form>