<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    public function lessons(): HasMany
    {
      return $this->hasMany(Lesson::class);
    }

    public function book(): BelongsTo
    {
      return $this->belongsTo(Book::class);
    }

    public function lecturer(): BelongsTo
    {
      return $this->belongsTo(Scholar::class, 'lecturer_id');
    }

}
