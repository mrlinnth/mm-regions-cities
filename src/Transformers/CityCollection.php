<?php

namespace Mrlinnth\Mmrc\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Mrlinnth\Mmrc\Transformers\CityResource;

class CityCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => CityResource::collection($this->collection),
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
