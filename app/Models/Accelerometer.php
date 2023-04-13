<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accelerometer extends Model
{
    use HasFactory;

    protected $fillable =  [
        'X',
        'Y',
        'Z'
    ];
}
