<?php

use App\Http\Controllers\AprendizController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/aprendices');

// Especificamos explícitamente que el parámetro sea 'aprendiz'
Route::resource('aprendices', AprendizController::class)
    ->parameters(['aprendices' => 'aprendiz'])
    ->except(['show']);