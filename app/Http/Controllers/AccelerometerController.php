<?php

namespace App\Http\Controllers;

use App\Models\Accelerometer;
use Illuminate\Http\Request;

class AccelerometerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'X' => 'required|numeric:2',
            'Y' => 'required|numeric:2',
            'Z' => 'required|numeric:2'
        ]);

        $accelerometer = new Accelerometer();

        $accelerometer['X'] = $request['X'];
        $accelerometer['Y'] = $request['Y'];
        $accelerometer['Z'] = $request['Z'];

        $accelerometer->save();

        return response()->json($accelerometer,201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
