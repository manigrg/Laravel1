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



Route::get('/replace/{firstWord}/{finalWord}', function($firstWord, $finalWord){
$sentence = "Hello World. I greet everyone by saying Hello.";
$finalSentence = str_replace($firstWord, $finalWord, $sentence);
return view('demo', ['firstWord' => $firstWord, 'finalWord' => $finalWord, 'finalSentence' => $finalSentence, 'sentence' => $sentence]);
});