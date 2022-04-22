<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name',
        'email',
        'password',
        'full_name',
        'phone',
        'district',
        'address',
        'ward',
        'street',
        'role',
        'img',
        'status'
    ];
    protected $table  = 'users';
    public $timestamps = true;
}
