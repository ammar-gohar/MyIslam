<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lesson extends Model
{
    use HasFactory;

    public function course(): BelongsTo
    {
      return $this->belongsTo(Course::class);
    }

    public function media(): BelongsToMany
    {
      return $this->belongsToMany(Media::class, 'lessons_media');
    }

}
