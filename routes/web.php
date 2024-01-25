<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Routing\Route as RoutingRoute;
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




Route::get('testimonials',[LandingController::class,'testimonials'])
->name('landing.testimonials');

Route::get('details',[LandingController::class,'details'])
->name('landing.details');

Route::get('categories',[LandingController::class,'categories'])
->name('landing.categories');

Route::get('musiks',[LandingController::class,'musiks'])
->name('landing.musiks');

Route::get('tari',[LandingController::class,'tari'])
->name('landing.tari');

Route::get('ludruk',[LandingController::class,'ludruk'])
->name('landing.ludruk');

Route::get('jajanan',[LandingController::class,'jajanan'])
->name('landing.jajanan');

Route::get('patungpahat',[LandingController::class,'patungpahat'])
->name('landing.patungpahat');

Route::get('makanan',[LandingController::class,'makanan'])
->name('landing.makanan');

Route::get('batik',[LandingController::class,'batik'])
->name('landing.batik');

Route::resource('/',LandingController::class );

Route::get('login', [LandingController::class, 'login']);

Route::get('register_form',[LandingController::class,'register_form'])
->name('Landing.register_form');

Route::get('login',[LandingController::class,'Landing'])
->name('Landing.masuk');

Route::get('Landing.signIn', [LandingController::class, 'signIn'])
    ->name('Landing.signIn');





