@extends('template')

@section('lol')
<div class= 'container'>
            <div class='row'>
                @foreach ($filmes as $filmes) 
                    <div class='col-4 border my-3 p-3 bg-dark d-flex justify-content-center text-light '>
                        Nome = {{$filmes['nome']}} <br>
                        Ano = {{$filmes['ano']}} <br>
                        Diretor = {{$filmes['diretor']}}<br>
                        Descrição = {{ $filmes['descrição']}}
                    </div>
                @endforeach
            </div>
        </div>
@endsection