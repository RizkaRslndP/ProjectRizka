<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $Rizka = User::create([
            'name' => 'Admin User',
            'username' => 'admin',
            'email' => 'rizka@iai.ac.id',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design',
        // ]);
        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'slug' => 'judul-artikel-1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'body' => 'This is the body of the first post. anyway this is just a dummy text. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
