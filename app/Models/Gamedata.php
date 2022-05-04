<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Gamedata extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        'timer',
        'vuelta',
        'nVueltas',
        'ejeX',
        'ejeY',
        'user',
        'map'
    ];
}
