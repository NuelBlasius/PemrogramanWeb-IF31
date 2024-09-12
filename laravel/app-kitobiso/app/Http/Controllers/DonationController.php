<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'status' => 'success',
            'message' => 'Data Donation Successfully',
            'data' => Donation::all(),
        ];
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'funding_id' => 'required|exists:fundings,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $donation = Donation::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Donation Created Successfully',
            'data' => $donation,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Donation Data Retrieved Successfully',
            'data' => $donation,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        $request->validate([
            'amount' => 'sometimes|required|numeric',
            'funding_id' => 'sometimes|required|exists:fundings,id',
            'user_id' => 'sometimes|required|exists:users,id',
        ]);

        $donation->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Donation Updated Successfully',
            'data' => $donation,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        $donation->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Donation Deleted Successfully',
        ]);
    }
}
