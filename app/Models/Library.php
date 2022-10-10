<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;
    protected $table ='library';
    protected $fillable = [
        'name',
        'get',
        'return',
        'status',
        
    ];
}
