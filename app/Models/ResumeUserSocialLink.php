<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeUserSocialLink extends Model
{
    use HasFactory;

    protected $table = 'resume_user_social_links';    

    protected $fillable = [
        'resume_user_id',
        'label',
        'link',
    ];

    public function resumeUser()
    {
        return $this->belongsTo(ResumeUser::class);
    }
}
