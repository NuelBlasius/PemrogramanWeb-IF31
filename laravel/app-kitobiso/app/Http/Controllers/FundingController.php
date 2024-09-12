<?php

namespace App\Http\Controllers;

use App\Models\Funding;
use Illuminate\Http\Request;

class FundingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'status' => 'success',
            'message' => 'Data Funding Successfully',
            'data' => Funding::all(),
        ];
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'required|string',
            'progress' => 'required|string|max:3',
            'duration' => 'required|string',
            'collected' => 'required|numeric',
            'target' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
        ]);

        $funding = Funding::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Funding Created Successfully',
            'data' => $funding,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Funding $funding)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Funding Data Retrieved Successfully',
            'data' => $funding,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funding $funding)
    {
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'desc' => 'sometimes|required|string',
            'image' => 'sometimes|required|string',
            'progress' => 'sometimes|required|string|max:3',
            'duration' => 'sometimes|required|string',
            'collected' => 'sometimes|required|numeric',
            'target' => 'sometimes|required|numeric',
            'user_id' => 'sometimes|required|exists:users,id',
        ]);

        $funding->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Funding Updated Successfully',
            'data' => $funding,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funding $funding)
    {
        $funding->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Funding Deleted Successfully',
        ]);
    }
}
