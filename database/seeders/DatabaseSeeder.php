<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Hikmat Fadrial R',
            'email' => 'hikmatfadrial2000@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Ilham',
            'email' => 'ilham@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
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
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates saepe eaque odio magnam fugiat ex quos possimus quidem quas autem, perferendis veniam!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates saepe eaque odio magnam fugiat ex quos possimus quidem quas autem, perferendis veniam! Praesentium earum magnam est quas id, perspiciatis maiores sapiente molestiae delectus voluptates aliquid, quo distinctio eos culpa doloribus suscipit? Eveniet, officiis. Aspernatur voluptatum atque sint quaerat commodi accusamus laborum suscipit molestias, architecto earum soluta neque eaque quisquam id, eveniet ad voluptatem ipsa, inventore placeat! Ducimus dolorem cumque eum consectetur aut. Totam dignissimos numquam animi, dolores aliquid dolorum. Facilis enim quis inventore nobis laudantium cumque quisquam dolorem eveniet dolorum reiciendis aliquam, quam suscipit a totam rem mollitia veniam sunt?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates saepe eaque odio magnam fugiat ex quos possimus quidem quas autem, perferendis veniam!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates saepe eaque odio magnam fugiat ex quos possimus quidem quas autem, perferendis veniam! Praesentium earum magnam est quas id, perspiciatis maiores sapiente molestiae delectus voluptates aliquid, quo distinctio eos culpa doloribus suscipit? Eveniet, officiis. Aspernatur voluptatum atque sint quaerat commodi accusamus laborum suscipit molestias, architecto earum soluta neque eaque quisquam id, eveniet ad voluptatem ipsa, inventore placeat! Ducimus dolorem cumque eum consectetur aut. Totam dignissimos numquam animi, dolores aliquid dolorum. Facilis enim quis inventore nobis laudantium cumque quisquam dolorem eveniet dolorum reiciendis aliquam, quam suscipit a totam rem mollitia veniam sunt?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates saepe eaque odio magnam fugiat ex quos possimus quidem quas autem, perferendis veniam!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates saepe eaque odio magnam fugiat ex quos possimus quidem quas autem, perferendis veniam! Praesentium earum magnam est quas id, perspiciatis maiores sapiente molestiae delectus voluptates aliquid, quo distinctio eos culpa doloribus suscipit? Eveniet, officiis. Aspernatur voluptatum atque sint quaerat commodi accusamus laborum suscipit molestias, architecto earum soluta neque eaque quisquam id, eveniet ad voluptatem ipsa, inventore placeat! Ducimus dolorem cumque eum consectetur aut. Totam dignissimos numquam animi, dolores aliquid dolorum. Facilis enim quis inventore nobis laudantium cumque quisquam dolorem eveniet dolorum reiciendis aliquam, quam suscipit a totam rem mollitia veniam sunt?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates saepe eaque odio magnam fugiat ex quos possimus quidem quas autem, perferendis veniam!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates saepe eaque odio magnam fugiat ex quos possimus quidem quas autem, perferendis veniam! Praesentium earum magnam est quas id, perspiciatis maiores sapiente molestiae delectus voluptates aliquid, quo distinctio eos culpa doloribus suscipit? Eveniet, officiis. Aspernatur voluptatum atque sint quaerat commodi accusamus laborum suscipit molestias, architecto earum soluta neque eaque quisquam id, eveniet ad voluptatem ipsa, inventore placeat! Ducimus dolorem cumque eum consectetur aut. Totam dignissimos numquam animi, dolores aliquid dolorum. Facilis enim quis inventore nobis laudantium cumque quisquam dolorem eveniet dolorum reiciendis aliquam, quam suscipit a totam rem mollitia veniam sunt?',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
