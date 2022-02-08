<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'attachments';
    protected $fillable = [
        'video_path', 'document_path', 'task_document_path'
    ];
}
