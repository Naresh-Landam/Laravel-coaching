<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReplacementOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id'        => $this->id,
            'item_name' => $this->item_name,
            'quantity'  => $this->quantity,
            'notes'     => $this->notes,
            'created_at'=> $this->created_at->toDateTimeString(),
            'updated_at'=> $this->updated_at->toDateTimeString(),
        ];
    }
}

