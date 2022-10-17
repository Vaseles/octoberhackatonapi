<?php

use App\Http\Controllers\AdvocateController;
use App\Http\Controllers\CompanyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//! All ROUTES
Route::get('', function () {
    return response([
        'urls' => [
            'company' => [
                'GET all' => 'http://127.0.0.1:8000/api/companies/',
                'GET' => 'http://127.0.0.1:8000/api/companies/1',
                'POST' => 'http://127.0.0.1:8000/api/companies/',
                'DELETE' => 'http://127.0.0.1:8000/api/companies/1',
            ],
            'advocate' => [
                'GET all' => 'http://127.0.0.1:8000/api/advocates',
                'GET' => 'http://127.0.0.1:8000/api/advocates/1',
                'POST' => 'http://127.0.0.1:8000/api/advocates',
                'DELETE' => 'http://127.0.0.1:8000/api/advocates/1',
            ],
        ],
        'creater' => [
            'name' => 'Vaseles',
            'github' => 'https://github.com/Vaseles/October-Hackathon-API-Edition-', 
        ],
    ]);
});

//! COMPANY
Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/companies/{id}/', [CompanyController::class, 'show']);
Route::post('/companies', [CompanyController::class, 'store']);
Route::delete('/companies/{id}', [CompanyController::class, 'destroy']);

//! ADVOCATE
Route::get('/advocates', [AdvocateController::class, 'index']);
Route::get('/advocates/{id}/', [AdvocateController::class, 'show']);
Route::post('/advocates', [AdvocateController::class, 'store']);
Route::delete('/advocates/{id}/', [AdvocateController::class, 'destroy']);