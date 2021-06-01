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

        $post01['image'] = 'https://cms-assets.tutsplus.com/uploads/users/769/posts/25334/preview_image/get-started-with-laravel-6-400x277.png';

        $post01['body'] = [
          "en" => 'Awesome translated post',
          "ar" => 'مشاركة مترجمة رائعة',
          "fr" => 'Super article traduit'
        ];

        Post::create($post01);
    }
}
