<?php

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
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'content' => 'null',
            'remember_token' => str_random(10)
        ]);

        $this->call([
            PropertyTableSeeder::class,
        ]);
    }
}
