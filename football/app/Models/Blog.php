<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'content',
        'img'
    ];
    protected $table  = 'blog';
    public $timestamps = true;
}
