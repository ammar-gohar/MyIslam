<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    public function askedBy(): BelongsTo
    {
      return $this->belongsTo(User::class, 'asked_by');
    }

    public function answeredByFullName()
    {
      return $this->answeredBy()->first_name . ' ' . $this->answeredBy()->last_name;
    }

    public function answeredBy(): BelongsTo
    {
      return $this->belongsTo(User::class, 'answered_by');
    }

    public function subQuestions(): HasMany
    {
      return $this->hasMany(Question::class, 'question_parent_id');
    }

    public function tags(): BelongsToMany
    {
      return $this->belongsToMany(Tag::class, 'questions_tags');
    }

}
