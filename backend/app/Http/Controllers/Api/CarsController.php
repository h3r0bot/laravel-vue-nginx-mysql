<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarsStoreRequest;
use App\Http\Resources\CarsResource;
use Illuminate\Http\Request;
use App\Models\Cars;
use Illuminate\Http\Response;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CarsResource::collection(Cars::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarsStoreRequest $request)
    {
        $created_car = Cars::create($request->validated());

        return new CarsResource($created_car);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new CarsResource(Cars::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarsStoreRequest $request, Cars $cars)
    {
        $cars->update($request->validated());

        return $cars;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cars $cars)
    {
        $cars->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
