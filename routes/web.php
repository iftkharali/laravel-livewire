<?php

use App\Http\Controllers\BoatController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\BoatCreate;


Route::get('/', function () {
    return view('index');
});

Route::get('/boats/create', [BoatController::class, 'create'])->name('create-boat-record');
