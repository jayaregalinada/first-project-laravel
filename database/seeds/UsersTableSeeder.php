<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Jay Are',
                'email' => 'jayaregalinada@gmail.com',
                'password' => '$2y$10$wPi31jzV5TM8tVqk21GPceV5qOQ6DZlAtWBgAIPMwvAb9rYemb4nO',
                'remember_token' => NULL,
                'created_at' => '2017-04-28 02:24:34',
                'updated_at' => '2017-04-28 02:24:34',
            ),
        ));


    }
}
