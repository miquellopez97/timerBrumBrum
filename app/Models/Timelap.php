<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Timelap extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        'user',
        'time',
        'map'
    ];
}
