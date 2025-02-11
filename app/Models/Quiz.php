<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'description',
        'time_limit',
    ];
}
