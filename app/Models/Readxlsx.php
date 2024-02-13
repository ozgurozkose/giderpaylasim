<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Readxlsx extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "readxlsxes";
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
    protected $casts = [
        'readTime' => 'datetime:d.m.Y H:00',
    ];
}

