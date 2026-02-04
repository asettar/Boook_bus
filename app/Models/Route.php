<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    /** @use HasFactory<\Database\Factories\RouteFactory> */
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function routeStops() {
        return $this->hasMany(RouteStop::class);
    }
    public function programs() {
        return $this->hasMany(Program::class);
    }
}
