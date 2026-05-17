<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlightSegment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'airport_id',
        'flight_id',
        'sequence',
        'time'
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function airport()
    {
        return $this->belongsTo(Airport::class);
    }
}
