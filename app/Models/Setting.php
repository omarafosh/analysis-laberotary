<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'laboratory_logo',
        'laboratory_name',
        'laboratory_address',
        'laboratory_phone',
        'laboratory_doctor',
    ];
}
