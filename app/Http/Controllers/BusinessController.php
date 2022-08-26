<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return Business::paginate(25);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return string
     */
    public function show($id)
    {
        return Business::with('reviews', 'reviews.source', 'hoursofoperations')->find($id)->toJson();
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
        //
    }

    public function find(Request $request)
    {
        if(empty($request->all()))
        {
            return response()->json([
                'message' => "A query parameter is needed for this endpoint. Please provide one of the following: name, business_id, status, zipcode, city_id, or state_id. "
            ], 400);
        }
        $allowedParams = [
            'name',
            'id',
            'status',
            'zipcode',
            'city_id',
            'state_id'
        ];
        $params = [];
        foreach($request->all() as $key => $value) {
            if(!in_array($key, $allowedParams))
            {
                return response()->json([
                    'message' => "Query parameter '$key' not accepted."
                ], 400);
            }
            $params[] = ["$key", 'like', "%$value%"];
        }

        return Business::with('reviews', 'reviews.source', 'hoursofoperations')->where($params)->take(10)->get()->toJson();
    }
}
