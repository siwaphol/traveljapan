<?php

namespace App\Http\Controllers;

use App\District;
use App\Province;
use App\Region;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlanController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        $provinces = array();

        foreach($regions as $reg)
        {
            $prov = Province::where('region_id',$reg->id)->orderBy('name')->get();
            array_push($provinces, $prov);
        }
        

        return view('plan', compact('regions','provinces'));
    }

    public function indexWithoutValue()
    {
        return view('template');
    }

    public function showFromID($id)
    {
        $districts = District::where('province_id', $id)->get();

        foreach($districts as $reg)
        {
            $prov = Province::where('region_id',$reg->id)->orderBy('name')->get();
            array_push($provinces, $prov);
        }
        dd($id);
    }
}
