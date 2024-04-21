<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MyUser extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['fullname','email','password','img','location','Phone', 'date_of_birth'];
}
