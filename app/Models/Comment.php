<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    public function article(): BelongsTo
    {
      return $this->belongsTo(Article::class, 'article_id');
    }

    public function author(): BelongsTo
    {
      return $this->belongsTo(User::class, 'author_id');
    }

    public function replies(): HasMany
    {
      return $this->hasMany(Comment::class, 'parent_comment_id');
    }

}
