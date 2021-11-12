<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'body',
        'sign',
        'created_at',
        'updated_at',
    ];
}
