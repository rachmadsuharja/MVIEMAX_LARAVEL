<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Film extends Model
{
    use HasFactory;

    protected $table = 'film_list';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'release_date', 'genre', 'img_cover', 'film_desc'];
}
