<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function showList()
    {
        $properties = Property::orderBy('id', 'desc')->with('images')->simplePaginate(6);
        return view('properties.list', compact('properties'));
    }
}
