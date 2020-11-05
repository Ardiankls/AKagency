<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agency extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_agency',
        'ceo_agency',
        'phone_agency',
        'email_agency',
        'founded_agency'
    ];
}
