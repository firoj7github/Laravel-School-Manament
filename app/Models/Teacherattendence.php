<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacherattendence extends Model
{
    use HasFactory;
    protected $table ='teacherattend';
    protected $fillable = [
        'name',
        'date',
        'month',
        'day',
        'attendence',
        
    ];
}
