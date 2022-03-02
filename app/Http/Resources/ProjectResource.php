<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

                'id' => (string)$this->id,
                'type' => 'Projects',
                'attributes' => [

                    'name' => $this->name,
                    'tool' => $this->tool,

                    'description' => $this->description,
                    'addedby' => $this->addedby,
                    'status' => $this->status,

                    'created_at' => $this->created_at,
                    'updated_at' => $this->updated_at,
                ]

        ];
    }
}
