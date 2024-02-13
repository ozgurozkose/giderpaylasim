<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'rank',
        'building_id',
        'public_id',
        'floorNumber',
        'doorNumber',
        'name',
        'info',
        'type',
        'area',
        'billingType',
        'locationMultiple',
        'coldWater',
        'hotWater',
        'enteredOn',
        'emails',
        'phones',
        'comparisonGroup',
        'password',

    ];
}
