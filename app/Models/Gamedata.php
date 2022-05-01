<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
