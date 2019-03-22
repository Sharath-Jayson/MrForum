<?php

use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\USer::create([

            'name' => 'admin',
            'password' => bcrypt('sarath12'),
            'email'  => 'admin@myforum.com',
            'admin' => 1,
            'avatar' => asset('avatars/avatar.png')


        ]);
    }
}
