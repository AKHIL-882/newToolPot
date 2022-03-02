<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ToolsResource extends JsonResource
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
                'type' => 'Tools',
                'attributes' => [

                    'name' => $this->name,
                    
                    'project' => $this->project,

                    'description' => $this->description,

                    'url' => $this->url,
                    
                    'status' => $this->status,

                    'created_at' => $this->created_at,
                    'updated_at' => $this->updated_at,
                ]

        ];
    }
}
