<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table = 'pendaftar';
    protected $primaryKey = 'id_pendaftar';
    protected $fillable = [
        'transaction_id', 'tiket_id', 'nama', 'email', 'nohp', 'quantity', 'created_at', 'updated_at'
    ];

    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'tiket_id');
    }
}
