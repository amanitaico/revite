<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;


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

Auth::routes();

Route::get('/', function () {return view('home');});

Route::get('/kiwi',function(){return view('kiwi');});

Route::get('/question',function(){return view('question');});

Route::get('/question_list',function(){return view('question_list');});




Route::get('/home', [HomeController::class, 'index'])->name('home');

//Member　会員登録・編集
Route::resource('/member',MemberController::class);


//contact  最初からリソースコントローラーつくっとけばよかった　

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');

Route::post('/contact/confirm', [ContactController::class,'confirm'])->name('contact.confirm');

Route::post('/contact/complete', [ContactController::class,'store'])->name('contact.store');

Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');

Route::get('/contact/{contact}/edit', [ContactController::class,'edit'])->name('contact.edit');

Route::put('/contact/{contact}', [ContactController::class,'update'])->name('contact.update');
