<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GearResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'user_id' => $this->user_id,
            'attributes' => [
                'created_at' => $this->created_at
            ]
        ];
    }
}
