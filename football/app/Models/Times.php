<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'number'
    ];
    protected $table  = 'times';
    public $timestamps = true;
    public function yardTimes(){
        return $this->hasMany(YardTime::class);
    }
}
