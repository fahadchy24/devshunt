<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function assignment_submissions()
    {
        return $this->hasMany(AssignmentSubmission::class);
    }

    public function enrolls()
    {
        return $this->hasMany(Enroll::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
