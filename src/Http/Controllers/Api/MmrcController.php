<?php

namespace Mrlinnth\Mmrc\Http\Controllers\Api;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Mrlinnth\Mmrc\Models\City;
use Mrlinnth\Mmrc\Models\Region;
use Mrlinnth\Mmrc\Transformers\CityCollection;
use Mrlinnth\Mmrc\Transformers\RegionCollection;
use Mrlinnth\Mmrc\Transformers\RegionResource;

class MmrcController extends Controller
{
    /**
     * Display listing of all cities and regions.
     * @return Response
     */
    public function index()
    {
        $result = [];
        return response()->json($result);
    }

    /**
     * Display listing of all regions.
     * @return Response
     */
    public function regionIndex()
    {
        return new RegionCollection(Region::paginate(config('mmrc.items_per_page')));
    }

    /**
     * Show the specified resource.
     * @param Region $region
     * @return Response
     */
    public function regionShow(Region $region)
    {
        return new RegionResource($region);
    }

    /**
     * Display listing of all cities.
     * @return Response
     */
    public function cityIndex()
    {
        return new CityCollection(City::paginate(config('mmrc.items_per_page')));
    }
}
