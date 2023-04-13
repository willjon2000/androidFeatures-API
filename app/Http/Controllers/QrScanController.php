<?php

namespace App\Http\Controllers;

use App\Models\QrScan;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use function Psy\debug;

class QrScanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return QrScan::all();
    }

    /**
     * Store a newly created resource in storage.
     * @return  JsonResponse
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "qrcode_text" => "required|string"
        ]);

        $QrCode = new QrScan();

        $QrCode["qrcode_text"] = $request["qrcode_text"];

        $QrCode->save();

        return response()->json($QrCode,201);
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
