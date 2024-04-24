
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoTaskController;
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
    return view('contoh');
});
// Route::get('/', [TodoTaskController::class, 'index']);

// Route::get('/pertama', function () {
//     return view('contoh');
// });

Route::get('/', [TodoTaskController::class, 'index']);
Route::post('/', [TodoTaskController::class, 'store']);
Route::delete('/deleteTask/{id}', [TodoTaskController::class, 'deleteTask']);
// return view('contoh'); 
