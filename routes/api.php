<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource("companions", "CompanionsController");
Route::apiResource("doctors","DoctorsController");
Route::apiResource("drugs","DrugsController");
Route::apiResource("hospitals","HospitalsController");
Route::apiResource("patients","PatientsController");
Route::apiResource("triages","TriagesController");



