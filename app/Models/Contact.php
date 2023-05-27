<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'identification',
        'name',
        'last_name',
        'date_birth',
        'phone',
        'address',
    ];
}
