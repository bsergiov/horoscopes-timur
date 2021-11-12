<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuCompliant extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'body',
        'pair',
        'created_at',
        'updated_at'
    ];
}
