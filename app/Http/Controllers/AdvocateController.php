<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdvocateRecuest;
use App\Models\Advocate;
use Illuminate\Http\Request;
use App\Http\Resources\AdvocateResource;
use GuzzleHttp\Psr7\Response;

class AdvocateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response([
            'advocates' => AdvocateResource::collection(Advocate::all()),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvocateRecuest $request)
    {
        $request->validated($request->all());

        $advocate = Advocate::create([
            'name' => $request->name,
            'profile_pic' => $request->profile_pic,
            'short_bio' => $request->short_bio,
            'long_bio' => $request->long_bio,
            'advocate_years_exp' => $request->advocate_years_exp,
            'company_id' => $request->company_id,

            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
            'github' => $request->github,
        ]);

        return response([
            'message' => 'Advocate has been created',
            'advocate' => new AdvocateResource($advocate),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $advocate = Advocate::find($id);

        if ($advocate) {
            return response([
                'advocate' => new AdvocateResource($advocate),
            ]);
        }
        return response(['message' => 'advocate not found'], 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advocate = Advocate::find($id);

        if ($advocate) {
            $advocate->delete();
            return response([
                'message' => 'Advocate has been deleted successfully!',
            ]);
        }

        return response(['message' => 'advocate not found'], 404);

    }
}
