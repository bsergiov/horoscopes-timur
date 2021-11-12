<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnCompliant extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'body',
        'pair',
        'ltfv',
        'created_at',
        'updated_at'
    ];
}
