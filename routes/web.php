<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\TodoList;

Route::get('/', \App\Livewire\TodoList::class);


