<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    protected $table = 'coach';
    public $timestamps = true;

    protected $fillable = [
        'firstname',
        'lastname',
        'description',
        'image'
    ];
}