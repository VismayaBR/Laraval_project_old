<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studymaterial extends Model
{
    use HasFactory;
    protected $fillable=[
      'subject',
      'standard',
      'file',
    ];
}
