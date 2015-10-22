<?php namespace Galeria\Http\Controllers;

/* Controlador de prueba */

class PruebaController extends Controller {


	public function __construct()
	{
		// aplico el filtro
		$this->middleware('auth');
	}

	/**
	 * Show the application auth screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// le digo hacia dónde quiero que dirija una vez se haya identificado el usuario
		return view('home');
	}
	
	/*Método de prueba*/
	public function nombre($nombre)
	{
		// le digo hacia dónde quiero que dirija una vez se haya identificado el usuario
		return 'Mi nombre es: '.$nombre;
	}


}
