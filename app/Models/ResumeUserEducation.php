<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeUserEducation extends Model
{
    use HasFactory;

    protected $table = 'resume_user_educations';

    protected $fillable = [
        'resume_user_id',
        'school',
        'degree',
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
