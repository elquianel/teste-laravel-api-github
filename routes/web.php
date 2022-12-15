<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;

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

Route::get('/home', [MainController::class, 'index']);
Route::get('/repos', [MainController::class, 'getRepos']);
Route::get('/', [AuthController::class, 'login']);
Route::get('/detailsRepo/{repoSelected}', [MainController::class, 'getDetailsRepos']);
Route::get('/auth/github/redirect', [AuthController::class, 'gitRedirect']);
Route::get('/auth/github/callback', [AuthController::class, 'gitCallback']);
Route::get('/logout', function (){
    if(session()->has('user')){
        session()->pull('user');
    }

    return redirect('/');
});
