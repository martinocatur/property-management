<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'address',
        'description',
        'type',
        'status',
        'price',
        'number_of_bedrooms',
        'number_of_bathrooms',
        'number_of_car_spaces'
    ];

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }
}
