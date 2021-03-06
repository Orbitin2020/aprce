<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    protected $fillable = [
        'tiket_id', 'agenda', 'image', 'description','tgl_mulai','tgl_akhir'
    ];

    public function speaker()
    {
        return $this->belongsToMany(Speaker::class)->orderBy('speakPrioritas')->withPivot('created_at');
    }
   
    public function tiket()
    {
        return $this->hasOne(Tiket::class, 'id', 'tiket_id');
    }
}
