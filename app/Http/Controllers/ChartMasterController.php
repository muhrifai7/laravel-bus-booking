<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChartMaster;

class ChartMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chartMaster = ChartMaster::all();

        return response()->json([
            'data' => $chartMaster,
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'account_code' => 'required|max:15',
                'account_name' => 'required|max:60',
                'account_type' => 'string',
                'inactive' => 'required|boolean',
                'no_pol' => 'required|integer',
                'id_bus' => 'required|integer',
                'nomor_rek' => 'string',
                'id_company' => 'required|integer'
            ]);

            $account = ChartMaster::create($validatedData);

            return response()->json([
                'message' => 'Chart Master created successfully',
                'data' => $account,
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Error creating Chart Master',
                'error' => $th->getMessage(),
            ], 500);
        }
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
