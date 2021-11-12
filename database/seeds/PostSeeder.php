<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->sentence();
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->content = $faker->paragraph(5);
            $newPost->save();
        }
    }
}
