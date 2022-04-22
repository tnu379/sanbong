<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yard extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'price',
        'is_active',
        'size',
        'status'
    ];
    protected $table  = 'yard';
    public $timestamps = true;
}
