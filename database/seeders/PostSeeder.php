<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()
            ->count(50)
            ->create()->each(function ($post) {
                $r = rand(0, 2);
                for($count = 0; $count < $r; $count++) {
                    $tag = Tag::find(rand(1, 9));
                    $post->tags()->save($tag);
                    ;
                }
            });
    }
}
/*while($count <= rand(0, 1)) {
    $tag = Tag::find(rand(1, 9));
    $post->tags()->save($tag);
    $count++;
}*/