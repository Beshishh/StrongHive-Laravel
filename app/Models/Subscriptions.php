<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
    use HasFactory;

    protected $table = 'subscriptions';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'price',
        'days',
        'created_at',
        'updated_at'
    ];
}