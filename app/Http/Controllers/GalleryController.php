<?php namespace Galeria\Http\Controllers;

use Galeria\Http\Requests;
use Galeria\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GalleryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	
	 //Adding Security filter for application request login in to App
	 public function __construct(){
	 	
	 		$this->middleware('auth'); 
	 }
	 
	 
	 
	 
	 
	public function index()
	{
		//
		/*return 'Welcome Gallery Sports & Marketing Runners';*/
		return view('home');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
