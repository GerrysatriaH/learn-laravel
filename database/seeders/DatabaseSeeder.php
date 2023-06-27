<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Post::create([
        //     'category_id' => 1,
        //     'name' => 'Sari Roti',
        //     'slug' => 'sari-roti',
        //     'price'=> 10000,
        //     'qty'  => 30
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'name' => 'Fruity',
        //     'slug' => 'fruity',
        //     'price'=> 4000,
        //     'qty'  => 10
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'name' => 'Indomie',
        //     'slug' => 'indomie',
        //     'price'=> 3500,
        //     'qty'  => 20
        // ]);

        Category::create([
            'name' => 'Makanan',
            'slug' => 'makanan'
        ]);
        
        Category::create([
            'name' => 'Minuman',
            'slug' => 'minuman'
        ]);

        // User::create([
        //     'name' => 'Gerry Satria Halim',
        //     'email' => 'gerrysatria@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();
        Post::factory(10)->create();
    }
}
