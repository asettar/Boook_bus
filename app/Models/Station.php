<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    /** @use HasFactory<\Database\Factories\StationFactory> */
    use HasFactory;
    protected $fillable = ['name', 'address', 'city_id']; 

    // relations 
    public function city() {
        return $this->belongsTo(City::class);
    }

    public function routeStops() {
        return $this->hasMany(RouteStop::class);
    }
}
