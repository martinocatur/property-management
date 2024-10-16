<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Property, PropertyImage};
use App\Http\Requests\PropertyUpdateRequest;
use App\Enums\{PropertyType, PropertyStatus};

class PropertyController extends Controller
{
    public function showList()
    {
        $properties = Property::orderBy('id', 'desc')->with('images')->simplePaginate(6);
        return view('properties.list', compact('properties'));
    }

    public function create()
    {
        $property = Property::factory()->create([
            'name' => '',
            'slug' => '',
            'address' => '',
            'description' => '',
            'type' => PropertyType::APARTMENT->value,
            'status' => PropertyStatus::INACTIVE->value,
            'price' => rand(1000, 2000),
            'number_of_bedrooms' => 1,
            'number_of_bathrooms' => 1,
            'number_of_car_spaces' => 1
        ]);

        $property->images()->saveMany(array_map(function ($imageNumber) use ($property) {
            return new PropertyImage([
                'image_url' => 'https://picsum.photos/seed/property-' . $property->id . '-' . $imageNumber . '/800/600',
                'order' => $imageNumber
            ]);
        }, range(1, 4)));

        return redirect()->route('property.edit', ['property' => $property]);
    }

    public function form(Property $property)
    {
        return view('properties.form', compact('property'));
    }

    public function save(PropertyUpdateRequest $request, $id)
    {
        $propertyData = $request->validated();
        $propertyData['slug'] = $propertyData['slug'] ?? str()->slug($propertyData['name']);
        Property::whereId($id)->update($propertyData);
        return redirect('/')->with('status', 'Property updated!');
    }
}
