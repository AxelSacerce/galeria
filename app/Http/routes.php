<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| Ejemplo de Métodos HTTP: post, get, put, delete
*/


/*
| RUTAS DE PRUEBA
| Generado para hacer prueba ésta ruta se comunica directamente con el controlador PruebaController.php
| @ despues del nombre del controlador se refiere al método del controlador al que queremos que valla al ingresar la ruta en URL
|
|
| Route::get('test', 'PruebaController@index');
|
| // Ruta que recibe parámetro
|  Route::get('name/{nombre}', 'PruebaController@nombre');
*/

Route::Resource('gallery', 'GalleryController');



Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
