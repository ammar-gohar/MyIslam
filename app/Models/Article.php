<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    public function comments(): HasMany
    {
      return $this->hasMany(Comment::class);
    }

    public function author(): BelongsTo
    {
      return $this->belongsTo(User::class, 'author_id');
    }

    public function authorFullName()
    {
      return $this->author()->first_name . ' ' . $this->author()->last_name;
    }

    public function tags(): BelongsToMany
    {
      return $this->belongsToMany(Tag::class, 'articles_tags');
    }

    public function media(): BelongsToMany
    {
      return $this->belongsToMany(Media::class, 'articles_media');
    }

}
