<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $table = 'user_membership';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'name', 'email', 'password', 'gender', 'role_id'];

    public function role() {
        return $this->belongsTo(Role::class);
    }
}
