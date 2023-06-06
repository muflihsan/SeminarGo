<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;

    protected $table = 'seminar';

    protected $fillable = [
        'id',
        'namaseminar',
        'judulseminar',
        'tanggalseminar',
        'waktuseminar',
        'tempatseminar',
        'pelaksanaanseminar',
        'isPaid',
        'hargatiket',
        'templatesertifikat',
        'openpendaftaranseminar',
        'closependaftaranseminar',
        'startdownload',
        ];
}