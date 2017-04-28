<?php namespace App\Http\Controllers;

use App\Models\PHHobies;
use Illuminate\Routing\Controller;

class PHHobiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /phhobies
	 *
	 * @return Response
	 */
	public function index()
	{
//		return PHHobies::with(['conect'])->get();
        return view('hobbiescreated');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /phhobies/create
	 *
	 * @return Response
	 */
	public function create()
    {
        $data = request()->all();

        $record = PHHobies::create(array(
            'name' => $data['hobbies']
        ));

        return view('hobbiescreated', $record->toArray());
    }
	/**
	 * Store a newly created resource in storage.
	 * POST /phhobies
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /phhobies/{id}
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
	 * GET /phhobies/{id}/edit
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
	 * PUT /phhobies/{id}
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
	 * DELETE /phhobies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}