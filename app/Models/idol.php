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
        'gender_idol',
        'phone_idol',
        'speciality_idol',
        'agency_idol'
    ];
    public function agency(){
           return $this->belongsTo(agency::class,'agency_idol', 'id');
           }
}
