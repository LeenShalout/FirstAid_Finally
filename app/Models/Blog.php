<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'Category', 'MainTitle', 'Title', 'MainImg', 'Summary', 'Intro', 'Steps', 'Photo', 'Conclusion'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
