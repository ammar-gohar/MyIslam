<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Media extends Model
{
    use HasFactory;

    // public function lessons(): BelongsToMany
    // {
    //   return $this->belongsToMany(Lesson::class, 'lessons_media');
    // }

    // public function articles(): BelongsToMany
    // {
    //   return $this->belongsToMany(Article::class, 'articles_media');
    // }

}
