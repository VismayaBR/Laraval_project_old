<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;
    // protected $primarykey='tt_id';
    protected $fillable = [
        'standard',
        'day',
        's1',
        's2',
        's3',
        's4',
        't1',
        't2',
        't3',
        't4',
    ];
}
