<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Avriansyah',
            'email' => 'avrians@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create(
            [
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur dolore, quam odio accusamus debitis impedit quae, asperiores inventore?',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur dolore, quam odio accusamus debitis impedit quae, dicta repellendus sit quaerat, sequi necessitatibus asperiores inventore? Aliquid amet non excepturi unde! Blanditiis id deserunt numquam laudantium impedit consectetur, qui mollitia officia aliquid consequuntur ea repellat magni nihil quos enim autem maiores deleniti fugit facere doloribus adipisci repudiandae veniam nulla! Vitae earum ut eum vel minus. Culpa mollitia reprehenderit ut eaque, possimus quam voluptates quibusdam at commodi quod provident animi officia eligendi molestiae dicta quasi ad assumenda. Qui ducimus enim optio debitis. Et voluptatem aliquam sit quos maxime corporis voluptas, magni id nemo.',
            'category_id' => 1,
            'user_id' => 1]);
            Post::create([
                    'title' => 'Judul Ke Dua',
                    'slug' => 'judul-ke-dua',
                    'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur dolore, quam odio accusamus debitis impedit quae, asperiores inventore?',
                    'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur dolore, quam odio accusamus debitis impedit quae, dicta repellendus sit quaerat, sequi necessitatibus asperiores inventore? Aliquid amet non excepturi unde! Blanditiis id deserunt numquam laudantium impedit consectetur, qui mollitia officia aliquid consequuntur ea repellat magni nihil quos enim autem maiores deleniti fugit facere doloribus adipisci repudiandae veniam nulla! Vitae earum ut eum vel minus. Culpa mollitia reprehenderit ut eaque, possimus quam voluptates quibusdam at commodi quod provident animi officia eligendi molestiae dicta quasi ad assumenda. Qui ducimus enim optio debitis. Et voluptatem aliquam sit quos maxime corporis voluptas, magni id nemo.',
                    'category_id' => 2,
                    'user_id' => 1 ]);

            Post::create([
                'title' => 'Judul Ke Tida',
                'slug' => 'judul-ke-tiga',
                'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur dolore, quam odio accusamus debitis impedit quae, asperiores inventore?',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur dolore, quam odio accusamus debitis impedit quae, dicta repellendus sit quaerat, sequi necessitatibus asperiores inventore? Aliquid amet non excepturi unde! Blanditiis id deserunt numquam laudantium impedit consectetur, qui mollitia officia aliquid consequuntur ea repellat magni nihil quos enim autem maiores deleniti fugit facere doloribus adipisci repudiandae veniam nulla! Vitae earum ut eum vel minus. Culpa mollitia reprehenderit ut eaque, possimus quam voluptates quibusdam at commodi quod provident animi officia eligendi molestiae dicta quasi ad assumenda. Qui ducimus enim optio debitis. Et voluptatem aliquam sit quos maxime corporis voluptas, magni id nemo.',
                'category_id' => 1,
                'user_id' => 1]);


    }
}
