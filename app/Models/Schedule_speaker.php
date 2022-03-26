<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule_speaker extends Model
{
    protected $table = 'schedule_speaker';
    protected $fillable = [
        'schedule_id','speaker_id'
    ];
}
