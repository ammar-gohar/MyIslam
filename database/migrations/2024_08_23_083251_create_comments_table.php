<?php

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'author_id')->nullable()->nullOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Article::class, 'article_id')->nullable()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Comment::class, 'parent_comment_id')->nullable()->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
