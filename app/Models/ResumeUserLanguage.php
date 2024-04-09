<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeUserLanguage extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_user_id',
        'language',
        'level',
    ];

    public function resumeUser()
    {
        return $this->belongsTo(ResumeUser::class);
    }
}