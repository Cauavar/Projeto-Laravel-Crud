<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmesController;

Route::get('index', function () {
    return view('index');
});
Route::get('cadastro', function () {
    return view('cadastroDeFilmes');
});
Route::post('Filmes', [FilmesController::class, 'FilmesFuncao']);
Route::get('Filmes', [FilmesController::class, 'FilmesFuncao']);