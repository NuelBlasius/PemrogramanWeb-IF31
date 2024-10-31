<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\OnlineTrainingResource;
use Illuminate\Http\Request;
use App\Models\OnlineTraining;
use Illuminate\Support\Facades\Validator;

class OnlineTrainingController extends Controller
{
     /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {

        $onlineTraining = OnlineTraining::get();
        if ($onlineTraining->count() > 0)
        {
             return OnlineTrainingResource::collection($onlineTraining);
        }
        else 
        {
            return response()->json([
                "code" => 400,
                "message" => "Failed",
                "errors" => $onlineTraining->errors()
            ], 400);
        }
        return response()->json([
            'code' => 200,
            'message' => 'Success',
            'data' => $onlineTraining,
        ], 200);
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
        // $validate = $request->validate([
        //     'participant_name' => 'required|string|max:100',
        //     'event_name' => 'required|string|max:100',
        //     'event_date' => 'required|date',
        //     'location' => 'required|string|max:255',
        //     'category' => 'required|string|max:10',
        // ]);


        $validator = Validator::make($request->all(), [
            'participant_name' => 'required|string|max:100',
            'training_name' => 'required|string|max:100',
            'training_date' => 'required|date',
            'location' => 'required|string|max:255',
            'category' => 'required|string|max:10',
        ]);

        if($validator->fails())
        {
            return response()->json([
                "code" => 400,
                "message" => "Failed",
                "errors" => $validator->errors()
            ], 400);
        }

        // $request->validate([
        //     'participant_name' => 'required|string|max:100',
        //     'training_name' => 'required|string|max:100',
        //     'training_date' => 'required|date',
        //     'location' => 'required|string|max:255',
        //     'category' => 'required|string|max:10',
        // ]);

        $onlineTraining = OnlineTraining::create([
            'participant_name' => $request->participant_name,
            'training_name' => $request->event_name,
            'training_date' => $request->training_date,
            'location' => $request->location,
            'category' => $request->category,
        ]);

        // $validator = Validator::make($request->all(), [
        //     'participant_name' => 'required|string|max:100',
        //     'event_name' => 'required|string|max:100',
        //     'event_date' => 'required|date',
        //     'location' => 'required|string|max:255',
        //     'category' => 'required|string|max:10',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         "code" => 400,
        //         "message" => "Failed",
        //         "errors" => $validator->errors()
        //     ], 400);
        // }

        // OnlineTraining::create($validate);

        $onlineTraining = OnlineTraining::create($request->all());
        
        return response()->json([
            'code' => 200,
            'message' => 'Success',
            'data' => new OnlineTrainingResource($onlineTraining),
        ], 200);
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
