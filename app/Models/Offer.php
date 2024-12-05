<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactories;
use Illuminate\Database\Eloquent\Model;


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
