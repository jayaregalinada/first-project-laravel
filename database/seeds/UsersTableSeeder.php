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
                'password' => '$2y$10$HzDlSZhpIBwsP0DRvFNaUeXM7lEwkwYKxoNm/yuQ5z/wewzGLGv6e',
                'remember_token' => NULL,
                'created_at' => '2017-04-28 02:24:34',
                'updated_at' => '2017-04-28 02:24:34',
            ),
        ));


    }
}
