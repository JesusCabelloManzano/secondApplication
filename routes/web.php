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

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\TicketController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BackendTicketController;

Route::fallback([TicketController::class, 'fallback']);

Route::get('/', [TicketController::class, 'main'])->name('main');
//Route::get('/list', [FrontTicketController::class, 'list'])->name('list');
//Route::get('/detail/{id}', [FrontTicketController::class, 'detail'])->name('detail');

Route::get('ticket/ver', [TicketController::class, 'ver'])->name('ticket.ver');
Route::resource('ticket', TicketController::class);
Route::get('ticket/{id}/delete', [TicketController::class, 'delete'])->name('ticket.delete');

Route::get('backend', [BackendController::class, 'main'])->name('backend.main');
Route::resource('backend/ticket', BackendTicketController::class, ['names' => 'backend.ticket']);
Route::get('backend/ticket/{id}/delete', [TicketController::class, 'delete'])->name('backend.ticket.delete');