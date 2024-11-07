<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class ColdRoomData extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'sensorId',
        'title',
        'temp',
        'humidity',
        'co2'
    ];
}
