<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyCase extends Model
{
    use HasFactory;
    protected $fillable = ['Category', 'Title', 'MainPhoto', 'Description','Intro','Signs','Treatment_Procedures','Prevention_Tips','Before','During','After','Photo','Video'];


}
