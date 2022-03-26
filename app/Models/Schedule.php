<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    protected $fillable = [
        'agenda','description','tgl_mulai','tgl_akhir'
    ];

    public function speaker()
    {
        return $this->belongsToMany(Speaker::class)->withPivot('created_at');;
    }
   
    
}
