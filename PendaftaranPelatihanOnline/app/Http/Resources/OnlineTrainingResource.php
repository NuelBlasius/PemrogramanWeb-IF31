<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OnlineTrainingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            'id'=> $this->id,
            'participant_name' => $this->participant_name,
            'training_name' => $this->training_name,
            'training_date' => $this->training_date,
            'location' => $this->location,
            'category' => $this->category,
        ];
    }
}
