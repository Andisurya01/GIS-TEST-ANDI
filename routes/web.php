<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\siController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\formSiController;

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

Route::get('/generate-pdf',[App\Http\Controllers\PdfController::class, 'index']);

Route::get('/', [FormController::class, 'showForm']);
Route::post('/', [FormController::class, 'processForm']);

Route::get('/si', [formSiController::class, 'showForm']);
Route::post('/si', [formSiController::class, 'processForm']);
Route::get('/*', function () {
    return 'helloeawa' ;
});
Route::get('/images/{filename}', function ($filename) {
    $path = public_path('images/' . $filename);
    if (file_exists($path)) {
        return response()->file($path);
    } else {
        abort(404);
    }
})->where('filename', '.*');
