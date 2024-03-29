<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnnoncesController;
use App\Http\Controllers\BenevoleController;

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
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']); 
    
    
    Route::post('/annonces',[AnnoncesController::class, 'create_annonces']);
    Route::get('/annonce',[AnnoncesController::class, 'annonces']);
    Route::delete('/delete/{annonce}',[AnnoncesController::class, 'destroy']);

    Route::post('/benevole',[BenevoleController::class,'benevole']);