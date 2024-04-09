<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
    ];

    // You may define relationships or other methods relevant to this model here
}
