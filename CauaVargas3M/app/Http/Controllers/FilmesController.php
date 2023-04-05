<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function FilmesFuncao(Request $request) {

        $Nome = $request['filmeNome'];
        $Ano = $request['filmeAno'];
        $Diretor = $request['filmeDiretor'];
        $Descricao = $request['filmeDescricao'];
        $ListaFilmes = array('nome' => $Nome,
         'ano' => $Ano, 
         'diretor' => $Diretor, 
         'descrição' => $Descricao);
        $filmes = array(array('nome' => "a paixão de joana d'arc", 'ano'  => "1928 ", 'diretor' => 'Carl Theodor Dreyer', 'descrição' => 'A jovem camponesa Joana DArc é condenada à morte por ter liderado o povo francês contra o exército invasor inglês, dizendo que foi inspirada por Jesus e São Miguel. Ela passa suas últimas horas de vida capturada e torturada pelos ingleses.'));
      if($Nome != null) {
            array_push($filmes, $ListaFilmes);
      }              
        return view('filmes', compact('filmes'));
    }
}
