<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    public function articles(): BelongsToMany
    {
      return $this->belongsToMany(Article::class);
    }

    public function books(): BelongsToMany
    {
      return $this->belongsToMany(Book::class);
    }

    public function questions(): BelongsToMany
    {
      return $this->belongsToMany(Question::class);
    }

}
