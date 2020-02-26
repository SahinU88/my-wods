<?php

namespace App\Http\Controllers;

use App\Wod;
use Illuminate\Http\Request;

class WodController extends Controller
{
    public function index()
    {
        return Wod::all()->shuffle();
    }
}
