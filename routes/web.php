<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/',[PageController::class, "home"])->name("home");
Route::get('/about',[PageController::class, "about"] )->name("about");
Route::get('/menu',[PageController::class, "menu"] )->name("menu");
Route::get('/contact',[PageController::class, "contact"] )->name("contact");
Route::get('/blog',[PageController::class, "blog"] )->name("blog");
Route::get('/skill',[PageController::class, "skill"] )->name("skill");
Route::get('/work',[PageController::class, "work"] )->name("work");
