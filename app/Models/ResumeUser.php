<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title_id',
        'first_name',
        'last_name',
        'email',
        'photo',
        'phone',
        'country',
        'city',
        'address',
        'postal_code',
        'linkedin',
        'professional_summary',
    ];

    public function jobTitle()
    {
        return $this->belongsTo(EmployeeJob::class, 'job_title_id');
    }
    
    public function employmentHistories()
    {
        return $this->hasMany(ResumeUserEmployment::class);
    }

    public function educations()
    {
        return $this->hasMany(ResumeUserEducation::class);
    }

    public function socialLinks()
    {
        return $this->hasMany(ResumeUserSocialLink::class);
    }

    public function skills()
    {
        return $this->hasMany(ResumeUserSkill::class);
    }

    public function languages()
    {
        return $this->hasMany(ResumeUserLanguage::class);
    }

}
