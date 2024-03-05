<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Yana Sat',
            'username' => 'yanasat',
            'email' => 'yana@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'Web Programing'
        ]);

        Category::create([
            'name' => 'Web-Design',
            'slug' => 'Web-Design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat veritatis dolor commodi, enim possimus nihil aperiam. Quam quibusdam dolores accusantium necessitatibus laboriosam nulla eveniet commodi minima, aliquam, veniam, voluptatem fuga?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, aliquam exercitationem repellat inventore labore ducimus eligendi voluptas natus similique consequatur.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-Kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat veritatis dolor commodi, enim possimus nihil aperiam. Quam quibusdam dolores accusantium necessitatibus laboriosam nulla eveniet commodi minima, aliquam, veniam, voluptatem fuga?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, aliquam exercitationem repellat inventore labore ducimus eligendi voluptas natus similique consequatur.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-Ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat veritatis dolor commodi, enim possimus nihil aperiam. Quam quibusdam dolores accusantium necessitatibus laboriosam nulla eveniet commodi minima, aliquam, veniam, voluptatem fuga?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, aliquam exercitationem repellat inventore labore ducimus eligendi voluptas natus similique consequatur.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-Keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat veritatis dolor commodi, enim possimus nihil aperiam. Quam quibusdam dolores accusantium necessitatibus laboriosam nulla eveniet commodi minima, aliquam, veniam, voluptatem fuga?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, aliquam exercitationem repellat inventore labore ducimus eligendi voluptas natus similique consequatur.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
