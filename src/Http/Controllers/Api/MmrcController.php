<?php

namespace Mrlinnth\Mmrc\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Mrlinnth\Mmrc\Models\City;
use Mrlinnth\Mmrc\Models\Region;
use Mrlinnth\Mmrc\Transformers\CityCollection;
use Mrlinnth\Mmrc\Transformers\CityResource;
use Mrlinnth\Mmrc\Transformers\RegionCollection;
use Mrlinnth\Mmrc\Transformers\RegionResource;

class MmrcController extends Controller
{
    /**
     * Display listing of all regions
     * With related data
     * @param  Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $result = [];
        if (config('mmrc.use_json')) {
            $result = $this->jsonAll();
        } else {
            $result = new RegionCollection(Region::with('capital', 'cities')->get());
        }

        return $result;
    }

    /**
     * Display listing of all regions
     * Without related data
     * @return Response
     */
    public function regionIndex()
    {
        $result = [];
        if (config('mmrc.use_json')) {
            $result = $this->jsonRegions();
        } else {
            $result = new RegionCollection(Region::all());
        }

        return $result;
    }

    /**
     * Show the specified resource
     * With related data
     * @param  Int  $id
     * @param  Request $request
     * @return Response
     */
    public function regionShow($id, Request $request)
    {
        $result = [];
        if (config('mmrc.use_json')) {
            $result = $this->jsonRegions($id);
        } else {
            $region = Region::findOrFail($id);
            $result = new RegionResource($region->load('capital', 'cities'));
        }

        return $result;
    }

    /**
     * Display listing of all cities
     * Without related data
     * @param  Request $request
     * @return Response
     */
    public function cityIndex(Request $request)
    {
        $result = [];
        if (config('mmrc.use_json')) {
            $result = $this->jsonCities();
        } else {
            $result = new CityCollection(City::all());
        }

        return $result;
    }

    /**
     * Show the specified resource
     * With related data
     * @param  Int  $id
     * @param  Request $request
     * @return Response
     */
    public function cityShow($id, Request $request)
    {
        $result = [];
        if (config('mmrc.use_json')) {
            $result = $this->jsonCities($id);
        } else {
            $city = City::findOrFail($id);
            $result = new CityResource($city->load('region'));
        }

        return $result;
    }

    /**
     * Retrieve regions and cities listing from json files
     * Transform regions array with related capital and cities
     * @return Response
     */
    public function jsonAll()
    {
        $regions = $this->getFromJsonFile(config('mmrc.json_paths.regions'));

        $regions->transform(function ($region, $key) {
            return $this->addCitiesToRegionJson($region);
        });

        $data = $regions;

        $result = [
            'data' => $data,
            'meta' => [
                'use_json' => config('mmrc.use_json'),
            ],
        ];

        return response()->json($result);
    }

    /**
     * Retrieve regions listing from region json file
     * @param  Int $id region ID
     * @return Response
     */
    public function jsonRegions($id = null)
    {
        $regions = $this->getFromJsonFile(config('mmrc.json_paths.regions'));

        $data = $regions;

        if ($id != null) {
            $region = $regions->firstWhere('id', $id);
            $data = $this->addCitiesToRegionJson($region);
        }

        $result = [
            'data' => $data,
            'meta' => [
                'use_json' => config('mmrc.use_json'),
            ],
        ];

        return response()->json($result);
    }

    /**
     * Retrieve cities listing from city json file
     * @param  Int $id city ID
     * @return Response
     */
    public function jsonCities($id = null)
    {
        $cities = $this->getFromJsonFile(config('mmrc.json_paths.cities'));

        $data = $cities;

        if ($id != null) {
            $city = $cities->firstWhere('id', $id);
            $data = $this->addRegionToCityJson($city);
        }

        $result = [
            'data' => $data,
            'meta' => [
                'use_json' => config('mmrc.use_json'),
            ],
        ];

        return response()->json($result);
    }

    /**
     * Retrieve data from json file
     * @param  String $path json file path
     * @return Collection
     */
    public function getFromJsonFile($path)
    {
        $json = Storage::disk('local')->get($path);
        $arr = json_decode($json, true);
        return collect($arr['data']);
    }

    /**
     * Add capital and cities attribute to region
     * @param Object $region
     * @return  Object $region
     */
    public function addCitiesToRegionJson($region)
    {
        $cities = $this->getFromJsonFile(config('mmrc.json_paths.cities'));
        $region['capital'] = $cities->firstWhere('id', $region['capital_id']);
        $region['cities'] = array_values($cities->where('region_id', $region['id'])->all());

        return $region;
    }

    /**
     * Add region attribute to city
     * @param Object $city
     * @return  Object $city
     */
    public function addRegionToCityJson($city)
    {
        $regions = $this->getFromJsonFile(config('mmrc.json_paths.regions'));
        $city['region'] = $regions->firstWhere('id', $city['region_id']);

        return $city;
    }
}
