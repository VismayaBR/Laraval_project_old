<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
    use HasFactory;

    // protected $primarykey='tid';
    protected $fillable = [
        't_name',
        't_place',
        't_mobile',
        'qualification',
        'block',
        'email',
        'image',
        'lid',
    ];

} 
