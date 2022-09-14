<?php
use App\Http\Controllers\ListsController;

use Illuminate\Support\Facades\Route;

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
    return view('landing');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/', [ListsController::class, 'landing']);

Route::get('/viewAllList', [ListsController::class, 'viewAllList']); 

//});
Route::get('/InsertNewItem', [ListsController::class, 'insert_New_Item']); 
   
Route::post('/InsertItem', [ListsController::class, 'InsertItem'])-> name('InsertItem'); 

Route::get('/completedItems', [ListsController::class, 'vwCompletedItems'])-> name('vwCompletedItems');

