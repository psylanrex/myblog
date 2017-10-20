<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        // App\Post::truncate();
        // $this->call(PostSeeder::class);
        // $this->call(TagSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(ReasonSeeder::class);
    }
}
