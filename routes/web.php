<?php

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
    return view('home');
})->name('home');

Route::get('/secondWebsite', function () {
  $tricks= [
    'Ollie', 'Kickflip', 'Pop Shuve It', 'Varial flip', '3Flip', 'Darkslide'
  ];
  return view('secondWebsite', compact('tricks'));
})->name('secondWebsite');
