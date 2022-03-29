<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table = 'speakers';
    protected $fillable = [
        'speakName','speakJob','speakDesc','speakFoto','speakkategori','speakPrioritas'
    ];

    public function schedule()
    {
        return $this->belongsToMany(Schedule::class)->withPivot('created_at');;
    }
    
}
