<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'title' => str_random(20),
            'body' => str_random(100),
            'user_id'=>rand(1,5),
            'article_id'=>rand(1,10)
        ]);
    }
}
