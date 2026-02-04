<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    /** @use HasFactory<\Database\Factories\SegmentFactory> */
    use HasFactory;

    protected $fillable = ['start_city_id', 'end_city_id', 'estimated_time'];

    public function startCity() {
        return $this->belongsTo(City::class, 'start_city_id');
    }

    public function endCity() {
        return $this->belongsTo(City::class, 'end_city_id');
    }

    public function programs() {
        return $this->hasMany(Program::class);
    }
}
