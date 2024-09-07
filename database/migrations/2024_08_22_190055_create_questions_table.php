<?php

use App\Models\Question;
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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'asked_by')->nullable()->nullOnDelete('null')->cascadeOnUpdate();
            $table->text('question');
            $table->foreignIdFor(User::class, 'answered_by')->nullable()->nullOnDelete('null')->cascadeOnUpdate();
            $table->text('answer')->nullable();
            $table->foreignIdFor(Question::class, 'parent_question_id')->nullable()->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('lang', ['ar', 'en']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
