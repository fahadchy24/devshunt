<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Review;
use App\Models\Assignment;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Review by users relation
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Assignment by users relation
     */
    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    /**
     * Assignment Submission by users relation
     */
    public function assignment_submissions()
    {
        return $this->hasMany(AssignmentSubmission::class);
    }

    /**
     * Enrolled by users relation
     */
    public function enrolls()
    {
        return $this->hasMany(Enroll::class);
    }

    /**
     * Payments by users relation
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
