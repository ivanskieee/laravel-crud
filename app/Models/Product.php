<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify only the fields you want to be mass-assignable
    protected $fillable = [
        'name',
        'price',
        'description',
    ];
}
