<?php

namespace Mrlinnth\Mmrc\Http\Controllers;

use Illuminate\Routing\Controller;
use Mrlinnth\Mmrc\Models\Region;

class MmrcController extends Controller
{
    /**
     * For test purpose
     */
    public function test()
    {
        $region = Region::findOrFail(5);
        dd($region->capital_city);
    }
}
