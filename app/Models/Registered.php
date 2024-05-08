<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registered extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'Email', 'phone',];
    public function workshopTitle()
{
    return $this->belongsTo(Workshop::class, 'Workshop_id', 'id');
}
}





