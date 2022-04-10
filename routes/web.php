<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('todos', [TodosController::class, 'index']);

Route::get('todos/{todo}', [TodosController::class, 'show']);

///Creating new Todo Router
Route::get('new-todos', [TodosController::class, 'create']);

///POST Request for save-todos
Route::post('save-todos', [TodosController::class, 'save']);


// Route the view the editing page
Route::get('todos/{todo}/edit', [TodosController::class, 'edit']);
// Post Request ------- Route To run the editing 
Route::post('/todos/{todo}/update-todos', [TodosController::class, 'update']);

/// Delete todos route
Route::get('/todos/{todo}/delete', [TodosController::class, 'delete']);


///Complete Todo

Route::get('/todos/{todo}/complete', [TodosController::class, 'complete']);