<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    const CREATED_AT = 'create_time';
    const UPDATED_AT = null;

    protected $fillable = [
        'author',
        'text',
        'create_time',
    ];

    protected $casts = [
        'create_time' => 'datetime',
    ];
}
