<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'first_name', 'lastName', 'Address',
        'password', 'phone', 'email', 'status'
    ];
    use HasFactory;
}
