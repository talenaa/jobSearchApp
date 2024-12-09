<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\HasFactories;


class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment',
        'company',
        'status',
        'applied',
        'workspace',
        'journey',
    ];
}
