<?php namespace App\Http\Controllers;

use App\Models\PHCities;
use App\Models\PHPeople;
use Illuminate\Routing\Controller;

class PHPeopleController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /phpeople
	 *
	 * @return Response
	 */
	public function index()
	{
	    $data['cities'] = PHCities::pluck('name', 'id')->toArray();
//        return PHPeople::with(['cities','hobbiesConect'])->get();
        return view('peoplecreated', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /phpeople/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $data = request()->all();

        $record = PHPeople::create(array(
            'name' => $data['name'],
            'surname' => $data['surname'],
            'phone_number' => $data['phone_number'],
            'city_id' => $data['city'] ,
        ));

        $record['cities'] = PHCities::pluck('name', 'id')->toArray();

        return view('peoplecreated', $record->toArray());
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /phpeople
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /phpeople/{id}
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
	 * GET /phpeople/{id}/edit
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
	 * PUT /phpeople/{id}
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
	 * DELETE /phpeople/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}