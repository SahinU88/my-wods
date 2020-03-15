<?php

namespace App\Http\Controllers;

use App\Http\Resources\Wod as WodResource;
use App\Wod;

class WodController extends Controller
{
    public function index()
    {
        return WodResource::collection(Wod::all()->shuffle());
    }
}
