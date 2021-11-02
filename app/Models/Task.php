<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function week()
    {
        return $this->belongsTo(Week::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
