<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\App;

class Book extends Model
{
    use HasFactory;

    public function author(): BelongsTo
    {
      return $this->belongsTo(Scholar::class, 'author_id');
    }

    public function courses(): HasMany
    {
      return $this->hasMany(Course::class);
    }

    public function tags(): BelongsToMany
    {
      return $this->belongsToMany(Tag::class)->select('name_' . App::currentLocale() . " as name");
    }

}
