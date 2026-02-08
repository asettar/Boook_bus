<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    /** @use HasFactory<\Database\Factories\ProgramFactory> */
    use HasFactory;

    protected $fillable = ['route_id', 'segment_id', 'bus_id', 'distance', 'price', 'start_time', 'end_time'];
    protected $casts = [
        'departure_time' => 'datetime',
    ];
    
    public function route() {
        return $this->belongsTo(Route::class);
    }

    public function bus() {
        return $this->belongsTo(Bus::class);
    }

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
}
