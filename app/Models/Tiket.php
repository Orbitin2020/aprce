<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $table = 'tikets';
    protected $fillable = [
        'harga','nama','kategori','participant'
    ];
}
