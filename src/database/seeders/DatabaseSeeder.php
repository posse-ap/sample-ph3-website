<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create(['name' => 'admin', 'email' => 'test+1@posse-ap.com', 'password' => bcrypt('password')]);
        $quizzes = $this->listOfQuiz();
        foreach ($quizzes as $quiz) {
            $question = Question::create(['content' => $quiz['question'], 'supplement' => '', 'image' => '']);
            $question->choices()->createMany([
                ['name' => $quiz['choices'][0], 'valid' => $quiz['answer'] === $quiz['choices'][0]],
                ['name' => $quiz['choices'][1], 'valid' => $quiz['answer'] === $quiz['choices'][1]],
                ['name' => $quiz['choices'][2], 'valid' => $quiz['answer'] === $quiz['choices'][2]],
            ]);
        }
    }

    private function listOfQuiz(): array
    {
        // シンデレラの靴のサイズについては、原典であるグリム童話には具体的な記述がありません。
        // ただし、一般的には、19世紀のフランスで流行した「サンダル型の靴に、華やかな飾りとともに、ガラスを使った」という描写から、
        // 靴のサイズは当時のフランスで一般的だった約22.5cm程度であったという説です。
        return [
            [
                'question' => '日本の首都はどこでしょう？',
                'choices' => ['東京', '京都', '大阪'],
                'answer' => '東京',
            ],
            [
                'question' => '日本の最高峰は何でしょう？',
                'choices' => ['富士山', '立山', '北岳'],
                'answer' => '富士山',
            ],
            [
                'question' => '日本の面積はおおよそ何平方キロメートルでしょう？',
                'choices' => ['377,000', '587,000', '697,000'],
                'answer' => '377,000',
            ],
            [
                'question' => '日本の国花は何でしょう？',
                'choices' => ['桜', 'ひまわり', '菊'],
                'answer' => '菊',
            ],
            [
                'question' => '日本の国土の何%が森林であるでしょう？',
                'choices' => ['約68%', '約48%', '約28%'],
                'answer' => '約68%',
            ],
            [
                'question' => '日本の国鳥は何でしょう？',
                'choices' => ['キジ', 'ウグイス', 'トキ'],
                'answer' => 'キジ',
            ],
            [
                'question' => '日本で一番面積が小さい都道府県はどこでしょう？',
                'choices' => ['香川県', '埼玉県', '大阪府'],
                'answer' => '香川県',
            ],
            [
                'question' => '日本で初めて世界遺産に登録された場所はどこでしょう？',
                'choices' => ['厳島神社', '東大寺', '清水寺'],
                'answer' => '厳島神社',
            ],
            [
                'question' => '日本で一番人口が多い都道府県はどこでしょう？',
                'choices' => ['東京都', '大阪府', '神奈川県'],
                'answer' => '東京都',
            ],
            [
                'question' => 'シンデレラの靴は何サイズ？',
                'choices' => ['18cm', '22.5cm', '25cm'],
                'answer' => '22.5cm',
            ],
            [
                'question' => '「ハリー・ポッター」の主人公ハリーが、学校の通学用に乗る乗り物は何？',
                'choices' => ['ブルートレイン', 'ポニーカー', '魔法の掃除機'],
                'answer' => '魔法の掃除機',
            ],
            [
                'question' => 'ゲーム「ポケットモンスター」で、主人公が最初に選べるポケモンはどれ？',
                'choices' => ['ヒトカゲ', 'ゼニガメ', 'フシギダネ'],
                'answer' => 'フシギダネ',
            ],
        ];
    }
}
