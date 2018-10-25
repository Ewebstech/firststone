<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'admin', 
                'email' => 'admin@admin.com', 
                'content' => 'null', 
                'password' => bcrypt('xxxxxx'),
            ],

            [
                'username' => 'user', 
                'email' => 'user@user.com', 
                'content' => 'null', 
                'password' => bcrypt('xxxxxx'),
            ]
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
