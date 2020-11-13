<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Danny Festor',
            'email' => 'danny@festor.info',
            'role' => 'admin',
            'password' => Hash::make("12345678"),
        ]);
        $user->posts()->saveMany(Post::factory(3)->make());
        // User::factory(2)->create();
        // Post::factory(10)->create();
        User::factory(2)
            ->create()
            ->each(function ($user) {
                $user->posts()->saveMany(Post::factory(3)->make());
            });

        $this->call([
            PrefectureSeeder::class,
            CitySeeder::class,
            StationSeeder::class,
        ]);
    }
}
