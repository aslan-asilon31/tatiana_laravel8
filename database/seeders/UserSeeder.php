<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'aslanasilon1',
            'phone' => '082238489121',
            'email' => 'aslanasilon1@gmail.com',
            'password' => bcrypt('aslanasilon1'),
            'status' => '0',
            'image' => 'img1',

        ]);

        User::create([
            'name' => 'aslanasilon2',
            'phone' => '082238489121',
            'email' => 'aslanasilon2@gmail.com',
            'password' => bcrypt('aslanasilon2'),
            'status' => '1',
            'image' => 'img1',
        ]);
    }
}
