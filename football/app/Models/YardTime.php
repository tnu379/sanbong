<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YardTime extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'yard_id',
        'time_id',
        'month_id',
    ];
    protected $table  = 'yard_times';
    public $timestamps = true;
    public function yard()
    {
        return $this->belongsTo(Yard::class);
    }
}
