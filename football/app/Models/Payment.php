<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'order_id',
        'customer_id',
        'amount',
        'status',
        'title',
        'created_at',
        'updated_at',
        'type'
    ];
    protected $table  = 'payments';
    public $timestamps = true;
}
