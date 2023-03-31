<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Choice;
use App\Models\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $questions = Question::factory(3)->create();
        foreach ($questions as $question) {
            $choices = Choice::factory()->count(3)->make(['question_id' => $question->id]);
            $choices[rand(0, 2)]->valid = true;
            $choices->each->save();
        }
    }
}
