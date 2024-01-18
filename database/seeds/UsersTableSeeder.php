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
        //
        DB::table('users')->insert([
            'username' => 'atlas2',
            'mail' => 'atlas2@mail',
            'password' => Hash::make ('22222222')
        ]);

        DB::table('users')->insert([
            'username' => 'atlas3',
            'mail' => 'atlas3@mail',
            'password' => Hash::make ('33333333')
        ]);

        DB::table('users')->insert([
            'username' => 'atlas4',
            'mail' => 'atlas3@mail',
            'password' => Hash::make ('44444444')
        ]);
    }
}
