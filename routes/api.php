<?php

use App\Http\Controllers\TarefaController;
use App\Service\TarefaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/tarefa', [TarefaController::class, 'store']);

Route::get('/tarefa/{id}/find', [TarefaController::class, 'findById']);

Route::get('/tarefa/getAll',[TarefaController::class, 'getAll']);