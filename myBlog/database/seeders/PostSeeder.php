<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post01['title'] = [
          "en" => 'Awesome translated post',
          "ar" => 'مشاركة مترجمة رائعة',
          "fr" => 'Super article traduit'
        ];

        $post01['slug'] = 'awesome-translated-post';

        $post01['content'] = [
          "en" => 'Awesome translated post',
          "ar" => 'مشاركة مترجمة رائعة',
          "fr" => 'Super article traduit'
        ];

        Post::create($post01);
    }
}
