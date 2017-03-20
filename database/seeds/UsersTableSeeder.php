<?php

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
        DatabaseSeeder::truncateTable('users');
        $users = [
            [
                'id'       => 1,
                'name'     => 'ueno',
                'email'    => 'ueno@ueno.com',
                'password' => bcrypt('ueno'),
            ],
            [
                'id'       => 2,
                'name'     => 'ueno2',
                'email'    => 'ueno2@ueno.com',
                'password' => bcrypt('ueno2'),
            ],
            [
                'id'       => 3,
                'name'     => 'ueno3',
                'email'    => 'ueno3@ueno.com',
                'password' => bcrypt('ueno3'),
            ],
        ];
        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
