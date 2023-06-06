<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sertifikatTables extends Model
{
    use HasFactory;

    protected $fillable = [
        'idSertifikat',
        'idSeminar',
        'idUsers',
        'idSeminar',

    ];
}
