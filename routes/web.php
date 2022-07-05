<?php

use App\Http\Controllers\ParticipantsController;
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
    return view('welcome');
})->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(ParticipantsController::class)->group(function (){
    Route::get('/add/Participants','addParticipants')->name('addParticipants');
    Route::post('/create/Participants','createParticipants')->name('createParticipants');
    Route::get('/display/Participants','displayParticipants')->name('displayParticipants');
    Route::get('/select/Participants','selectParticipants')->name('selectParticipants');
    Route::post('/select/add/Participants','selectAddParticipants')->name('selectAddParticipants');
    Route::get('/type/Participants','typeParticipants')->name('typeParticipants');
});

