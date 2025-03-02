<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RequestSampleController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\RequestStack;

Route::get('/hello-world', fn() =>
    view('hello')
);

Route::get('/hello', fn() =>
    view('helloUser',[
        'name' => '山田',
        'source' => 'Laravel',
    ])
);

Route::get('/',fn() => view('index'));
Route::get('/curriculum',fn() => view('curriculum'));

// 世界の時間
Route::get('/world-time', [UtilityController::class, 'worldTime']);

// おみくじ
Route::get('/omikuji', [GameController::class, 'omikuji']);

// モンティ・ホール問題
Route::get('/monty-hall',[GameController::class, 'montyFall']);

Route::get('/form', [RequestSampleController::class, 'form']);

Route::get('query-strings', [RequestSampleController::class, 'queryStrings']);

Route::get('/user/{id}', [RequestSampleController::class, 'profile'])->name('profile');

Route::get('/products/{category}/{year}', [RequestSampleController::class, 'productsArchive']);

Route::get('/route-link', [RequestSampleController::class, 'routeLink']);

Route::get('/login',[RequestSampleController::class, 'loginForm']);
Route::post('/login', [RequestSampleController::class, 'login'])->name('login');

Route::resource('/events', EventController::class)->only(['index', 'create', 'store']);