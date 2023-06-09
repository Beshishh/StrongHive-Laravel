<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedule';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'open',
        'close',
        'created_at',
        'updated_at'
    ];
}