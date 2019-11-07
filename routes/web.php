<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('layouts.plantilla01');
});
Route::get('/page01', function () {
    return view('layouts.vista01');
});
Route::get('/page03', function () {
    return view('layouts.vista03');
});
Route::get('/page04', function () {
    return view('layouts.vista04');
});


Route::get('/page02', function () {
    $data = [
        ['id' => '1', 'nombre' => 'Jaime', 'direccion' => 'Jr.
Junin 130', 'ciudad' => 'Huancayo'],
        ['id' => '2', 'nombre' => 'Ana', 'direccion' => 'Jr. Ica
130', 'ciudad' => 'Tambo'],
        ['id' => '3', 'nombre' => 'JUan', 'direccion' => 'Jr.
Lima 130', 'ciudad' => 'Chilca']
    ];
    //return dd(compact('data'));
    return view('docentes.page01', compact('data'));
    //return view('docentes.page03')->with('data',$data);
})->name('vista01');

