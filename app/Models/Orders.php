<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders  extends Model
{
    use HasFactory;

    protected $table = 'orders';
    public $timestamps = true;

    protected $fillable = [
        'clientName',
        'orderedSub',
        'created_at',
        'updated_at',
        'totalPrice',
        'address',
        'phone',
        'email',
        'subEnd',
        'user_id',
        'sub_id',
        'qr',
    ];

    public function subscriptions()
    {
        return $this->belongsTo('App\Models\Subscriptions');
    }
    

}