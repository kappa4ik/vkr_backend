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



Route::get('/version', function () {
    $api_versions = [
        'version' => [
            1,2,3
        ],
    ];
    return $api_versions;
});

Route::get('/version/{id}', function($id) {
    $api_versions = [
        'version' => [
            1,2,3
        ],
    ];
    $v = array_search($id, $api_versions['version']);
    return $api_versions['version'][$v];
});

require __DIR__.'/auth.php';
