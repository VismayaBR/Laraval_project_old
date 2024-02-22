<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workmarks extends Model
{
    use HasFactory;
    protected $fillable=[
        'hw_id',
        'std_id',
        'marks',
    ];
}
