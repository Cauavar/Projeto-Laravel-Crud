@extends('template')
    <title>Cadastro</title>
@section('lol')
<div class="bg-secondary container my-3 p-3 d-flex justify-content-center">
        <form method="POST" action="Filmes" class="needs-validation">
            @csrf
            <h2> Cadastre um filme ao nosso catalogo </h2>
            <label for="fifa"> Nome do filme: </label>
            <input type="text" id="fifa" name="filmeNome" class="form-control" required><br>
            <label for="fifa">Ano: </label>
            <input type="date" name="filmeAno" id="fifa" class="form-control" required> <br>
            <label for="fifa">Diretor: </label>
            <input type="text" name="filmeDiretor" id="fifa" class="form-control" required> <br>
            <label for="fifa">Descrição: </label>
            <input type="text" name="filmeDescricao" id="fifa" class="form-control" required> <br>
            <button type="submit" name="botao" class="btn btn-warning">Enviar</button>
        </form>
    </div>
@endsection