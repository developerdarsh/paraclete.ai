<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeUserEmployment extends Model
{
    use HasFactory;

    protected $table = 'resume_user_employment';
    
    protected $fillable = [
        'resume_user_id',
        'job_title',
        'employer',
        'start_date',
        'end_date',
        'city',
        'description',
    ];

    public function resumeUser()
    {
        return $this->belongsTo(ResumeUser::class);
    }
}
