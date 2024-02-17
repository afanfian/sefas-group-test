<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    // Tambahkan fillable untuk mengizinkan mass assignment
    // protected $fillable = ['name', 'date', 'role', 'city'];
    // Tambahkan guarded untuk melarang mass assignment
    protected $guarded = [];

}
