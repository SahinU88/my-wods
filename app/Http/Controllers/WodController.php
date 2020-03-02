<?php

namespace App\Http\Controllers;

use App\Wod;

class WodController extends Controller
{
    public function index()
    {
        return Wod::all()->shuffle();
    }
}
