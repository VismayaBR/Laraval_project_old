<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date_of_birth',
        'place',
        'mobile',
        'parent_name',
        'standard',
        'status',
        'lid',
    ];

}
