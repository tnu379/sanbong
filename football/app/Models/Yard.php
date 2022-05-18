<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yard extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'name',
        'price',
        'is_active',
        'size',
        'status'
    ];
    protected $table  = 'yard';
    public $timestamps = true;
    public function yardTimes(){
        return $this->hasMany(YardTime::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'users_id','id');
    }
}
