<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Property, PropertyImage};

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::truncate();
        PropertyImage::truncate();
        
        foreach (range(1, 10) as $propertyNumber) {
            $property = Property::factory()->create();
            $property->images()->saveMany(array_map(function ($imageNumber) use ($property) {
                return new PropertyImage([
                    'image_url' => 'https://picsum.photos/seed/property-' . $property->id . '-' . $imageNumber . '/800/600',
                    'order' => $imageNumber
                ]);
            }, [1, 5]));
        }
    }
}
