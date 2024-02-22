<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    protected $fillable = [
        's1',
        's2',
        's3',
        's4',
        'm1',
        'm2',
        'm3',
        'm4',
        'std_id',
        'marklist',
    ];
}
