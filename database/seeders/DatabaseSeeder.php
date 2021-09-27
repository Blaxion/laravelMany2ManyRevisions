<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            ['name'=>"Art.1"],
            ['name'=>"Art.2"],
            ['name'=>"Art.3"],
            ['name'=>"Art.4"],
            ['name'=>"Art.5"],
        ]);

        DB::table('tags')->insert([
            ['name'=>"Tag.1"],
            ['name'=>"Tag.2"],
            ['name'=>"Tag.3"],
            ['name'=>"Tag.4"],
            ['name'=>"Tag.5"],
        ]);

        DB::table('article_tag')->insert([
            [
                'article_id'=>1,
                'tag_id'=>1,
            ],
            [
                'article_id'=>1,
                'tag_id'=>2,
            ],
            [
                'article_id'=>2,
                'tag_id'=>1,
            ],
            [
                'article_id'=>2,
                'tag_id'=>2,
            ],
            [
                'article_id'=>3,
                'tag_id'=>3,
            ],
            [
                'article_id'=>4,
                'tag_id'=>1,
            ],
            [
                'article_id'=>1,
                'tag_id'=>4,
            ],
        ]);

    }
}
