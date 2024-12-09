<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'enterprise',
        'description',
        'workspace',
        'status',
    ];

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}
