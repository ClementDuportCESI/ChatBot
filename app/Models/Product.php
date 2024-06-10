<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Les champs qui peuvent être remplis par assignation de masse
    protected $fillable = [
        'name',
        'color',
        'size',
    ];
}
