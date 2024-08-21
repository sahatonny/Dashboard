<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolement extends Model
{
    use HasFactory;

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function student() {
        return $this->belongsTo(User::class, 'student_id');
    }

}
