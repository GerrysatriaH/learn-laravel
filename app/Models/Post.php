<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Only what is defined is fillable
    protected $fillable = [
        'image', 
        'name', 
        'desc',
        'price',
        'qty',
        'add_at'
    ];

    // id can't be filled in, and the rest is fillable
    // Example : protected $guarded = ['id'];
}
