<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpdeskController;

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/helpdesk', [HelpdeskController :: class, 'index'] ) 
->name ('helpdesk');

Route::post('/helpdesk', [HelpdeskController :: class, 'salvar'] ) 
->name ('helpdesk.salvar');



// Chamados TI
Route::match(['get', 'post'], '/chamados-ti/helpdesk', fn () => view('projetos.chamados_ti.helpdesk'));
Route::match(['get', 'post'], '/chamados-ti/helpdesk-func', fn () => view('projetos.chamados_ti.helpdesk-func'));

// Projetos com formulário
Route::match(['get', 'post'], '/notas', fn () => view('projetos.projetos.notas'));
Route::match(['get', 'post'], '/desafio-notas', fn () => view('projetos.projetos.desafio_notas'));
Route::match(['get', 'post'], '/idade', fn () => view('projetos.projetos.idade'));
Route::match(['get', 'post'], '/login-basico', fn () => view('projetos.projetos.login_basico'));
Route::match(['get', 'post'], '/teste-post', fn () => view('projetos.projetos.teste_post'));



// Projetos que só mostram a tela
Route::view('/jogos', 'projetos.projetos.jogos');
Route::view('/json', 'projetos.projetos.json');

// API de teste
Route::get('/api-teste', fn () => view('projetos.api.api-teste'));