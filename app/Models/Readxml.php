<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Readxml extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "readxmls";
    protected $fillable = [
        'moduleNumber',
        'readTime',
        'meterValue',
        'deviceStatus',
        'deviceType',
        'meterUnit',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
