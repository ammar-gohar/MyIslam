<?php

use App\Models\Course;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('about');
            $table->year('written_in')->nullable();
            $table->foreignIdFor(Scholar::class, 'author_id')->nullable()->nullOnDelete()->cascadeOnUpdate()->nullable();
            $table->string('cover')->default('noCover.jpg');
            $table->enum('lang', ['ar', 'en']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
