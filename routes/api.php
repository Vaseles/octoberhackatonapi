<?php

use App\Http\Controllers\AdvocateController;
use App\Http\Controllers\CompanyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('', function () {
    return response([
        'urls' => [
            'company' => [
                'companies' => 'http://127.0.0.1:8000/api/companies/',
                'company' => 'http://127.0.0.1:8000/api/companies/1'
            ],
            'advocate' => [
                'advocates' => 'http://127.0.0.1:8000/api/advocates',
                'advocate' => 'http://127.0.0.1:8000/api/advocates/1',
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

//! ADVOCATE
Route::get('/advocates', [AdvocateController::class, 'index']);
Route::get('/advocates/{id}/', [AdvocateController::class, 'show']);