<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classteacher extends Model
{
    use HasFactory;
    // protected $primarykey='ct_id';
    protected $fillable = [
        'standard',
        'teacher',
    ];
}
