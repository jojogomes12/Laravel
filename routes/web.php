<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExemploController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoryController;




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [StoryController::class,'index'] );
route::get('/story/create',[StoryController::class,'create']);

route::post('/story/create',[StoryController::class,'create']);
Route::get('/test-database', function () {
    try {
        DB::connection()->getPdo();
        return response()->json(['success' => true, 'message' => 'Conexão bem-sucedida ao banco de dados']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Erro ao conectar ao banco de dados: ' . $e->getMessage()]);
    }
});

