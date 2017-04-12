<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => str_random(20),
            'description' => str_random(100),
            'body' => $this->generateSentence(),
            'user_id'=>rand(1,5),
            'article_id'=>rand(1,10)
        ]);
    }
    private function generateSentence(){
        $sentence= '';
        $i = rand(1, 1000);
        for ($i; $i>=0; $i--){
            $sentence += str_random(20).' ';
        }
        return $sentence;

    }
}
