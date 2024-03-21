<?php

use App\Http\Controllers\JualanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/index', [JualanController::class, 'index']);
route::get('/form', [JualanController::class, 'form']);
route::post('/create', [JualanController::class, 'create']);
route::get('/{id}/edit', [JualanController::class, 'edit']);
route::put('/update/{id}', [JualanController::class, 'update']);
route::delete('/update/{id}', [JualanController::class, 'destroy']);