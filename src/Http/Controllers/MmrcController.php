<?php

namespace Mrlinnth\Mmrc\Http\Controllers;

use Illuminate\Routing\Controller;

class MmrcController extends Controller
{
    /**
     * @return json
     */
    public function test()
    {
        dd(config('mmrc.use_json'));

        return response()->json(['data' => $regions]);
    }
}
