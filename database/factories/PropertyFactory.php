<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Enums\{PropertyType, PropertyStatus};

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->name();
        $type = PropertyType::cases()[rand(0, 1)]->value;
        $propertyName = ucfirst($type) . ' of ' . $name;
        return [
            'name' => ucfirst($type) . ' of ' . $name,
            'slug' => Str::slug($name, '-'),
            'address' => fake()->streetAddress(),
            'description' => 'Looking for an affordable and engaging lifestyle? Look no further than ' . $propertyName . ', an over 50’s community located within proximity to the historic town of Bendigo. The estate offers a secure and gated complex, providing homeowners with the comfort of living in a like-minded and safe environment. Operating on the innovative ‘land lease’ model, homeowners enjoy an array of financial benefits, including no stamp duty, no council rates, and no body corporate fees. Capital gains are kept by the homeowner.',
            'type' => $type,
            'status' => PropertyStatus::ACTIVE->value,
            'price' => rand(1000, 2000),
            'number_of_bedrooms' => rand(1, 5),
            'number_of_bathrooms' => rand(1, 3),
            'number_of_car_spaces' => rand(1, 4)
        ];
    }
}
