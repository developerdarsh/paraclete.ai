<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;

    // protected $table 
    protected $fillable = [
        'title',
        'section',
        'category',
        'embadded_url',
        'file_link'
    ];
}
