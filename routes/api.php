<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//for fetching data in paginated format from the backend
Route::get('/fetch-sbti-data',[\App\Http\Controllers\DocFetchController::class,'fetch_sbti_data'])->name('fetch_sbti_data');

//for importing excel data into the database via the API
Route::post('/import-sbti-data',[\App\Http\Controllers\DocFetchController::class,'import_excel_sheet'])->name('import_sbti_data');
