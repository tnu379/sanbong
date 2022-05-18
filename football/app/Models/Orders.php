<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'yard_id',
        'customer_id',
        'amount',
        'status',
        'schedule_date',
        'start',
        'end',
        'title'
    ];
    protected $table  = 'orders';
    public $timestamps = true;
    public function yard(){
        return $this->belongsTo(Yard::class);
    }

}
