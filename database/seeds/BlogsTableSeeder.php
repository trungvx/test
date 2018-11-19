<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'user_id' => array_random([1,2]),
            'title' => str_random(10),
            'content' => str_random(100),
        ]);
    }
}
