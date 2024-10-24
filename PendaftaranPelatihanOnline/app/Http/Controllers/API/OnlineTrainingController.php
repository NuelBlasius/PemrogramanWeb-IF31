<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OnlineTraining;

class OnlineTrainingController extends Controller
{
     /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        return response()->json([
            'code' => 200,
            'message' => 'Success',
            'data' => OnlineTraining::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'participant_name' => 'required|string|max:100',
            'event_name' => 'required|string|max:100',
            'event_date' => 'required|date',
            'location' => 'required|string|max:255',
            'category' => 'required|string|max:10',
        ]);

        OnlineTraining::create($validate);
        
        return response()->json([
            'code' => 200,
            'messahe' => 'Success',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(OnlineTraining $onlineTraining)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OnlineTraining $onlineTraining)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OnlineTraining $onlineTraining)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OnlineTraining $onlineTraining)
    {
        //
    }
}
