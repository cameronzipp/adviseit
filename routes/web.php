<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;

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

Route::get('/plan', [PlanController::class, 'generate_plan_id'])->name('plan');
Route::post('plan/{id}', 'PlanController@generate_plan_id');

// Route::get('/plan', function () {
//     return view('plan');
// });

/* For fetching plans */
/*Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});*/