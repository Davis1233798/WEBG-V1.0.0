<?php

use Illuminate\Support\Facades\Route;

use app\Models\Student;
use App\Http\Livewire\Forms;
use App\Http\Livewire\Students;
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

Route::get('/students',[Students::class,'render']);
Route::get('/forms',Forms::class);