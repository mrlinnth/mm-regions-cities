<?php

namespace Mrlinnth\Mmrc\Transformers;

use Illuminate\Http\Resources\Json\Resource;
use Mrlinnth\Mmrc\Transformers\RegionResource;

class CityResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'name_mm' => $this->name_mm,
            'region_id' => $this->region_id,
            'region' => new RegionResource($this->whenLoaded('region')),
        ];
    }

    /**
     * Get additional data that should be returned with the resource array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request)
    {
        return [
            'meta' => [
                'use_json' => config('mmrc.use_json'),
            ],
        ];
    }
}
