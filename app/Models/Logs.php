<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Logs extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = [
        'checkPoint1',
        'checkPoint2',
        'checkPoint3',
        'checkPoint4',
        'checkPoint5',
        'checkPoint6',
        'checkPoint7',
        'checkPoint8'
    ];
}
