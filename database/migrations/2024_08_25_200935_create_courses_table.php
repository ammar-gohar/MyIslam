<?php

use App\Models\Book;
use App\Models\Scholar;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(Scholar::class, 'lecturer_id')->nullable();
            $table->foreignIdFor(Book::class, 'book_id')->nullable()->nullOnDelete()->cascadeOnUpdate();
            $table->year('year')->nullable();
            $table->enum('lang', ['ar', 'en']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
