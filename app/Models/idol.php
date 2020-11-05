<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class idol extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_idol',
        'age_idol',
        'phone_idol',
        'speciality_idol',
        'agency'
    ];
}
