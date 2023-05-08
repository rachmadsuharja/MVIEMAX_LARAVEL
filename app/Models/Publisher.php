<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    
    protected $table = 'user_publisher';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'username', 'no_telp', 'password', 'address'];
}
