<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table = 'pendaftars';
    protected $fillable = [
        'nama','email','nohp'
    ];
}
