<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonAttachment extends Model
{
    use HasFactory;

    public function leasson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
