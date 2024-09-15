<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Book;
use App\Models\Course;
use App\Models\Question;
use App\Models\Scholar;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Tag::factory(15)
        //     ->create();

        // Article::factory(5)
        //     ->hasAuthor()
        //     ->hasTags(2)
        //     ->create();

        // Question::factory(20)
        //     ->hasAskedBy()
        //     ->hasAnsweredBy()
        //     ->hasTags(2)
        //     ->create();

        // Book::factory(10)
        //     ->hasAuthor()
        //     ->hasCourses(2)
        //     ->create();

        // Book::factory(10)
        //     ->hasAuthor()
        //     ->hasTags(2)
        //     ->create();

        Scholar::factory(7)->create();
        // Course::factory(10)
        //     ->hasLessons(10)
        //     ->create();


    }
}
