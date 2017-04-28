<?php namespace App\Http\Controllers;

use App\Models\PHCities;
use Illuminate\Routing\Controller;

class PHCitiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /phcities
	 *
	 * @return Response
	 */
	public function index()
	{
//	    return PHCities::with(['people'])->get();
		return view('createdcities');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /phcities/create
	 *
	 * @return Response
	 */
	public function create()
	{
	    $data = request()->all();

	    $record = PHCities::create(array(
	        'name' => $data['city']
        ));

	    return view('createdcities', $record->toArray());

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /phcities
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /phcities/{id}
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
	 * GET /phcities/{id}/edit
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
	 * PUT /phcities/{id}
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
	 * DELETE /phcities/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}