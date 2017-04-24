<?php

use Illuminate\Database\Seeder;
use intranet\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = factory(User::class, 1)->make();
        foreach ($users as $user)
        {
            $user->save();
        }

    }
}
