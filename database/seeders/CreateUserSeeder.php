<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            [
                'name'=>'Nadin', 
                'email' => 'nadin@gmail.com',
                'password'=>bcrypt('nadinpass'),
                'img'=>'4bfc73980173bf6cba2ee743648d11f0.jpg',
                'location'=>'Amman',
                'Phone'=>'+96276770656454',
                'role'=>0
            ],

            [
                'name'=>'Ahmad', 
                'email' => 'ahmad@gmail.com',
                'password'=>bcrypt('ahmadpass'),
                'img'=>'Discover-the-benefit-of-machine-learning-min.jpg',
                'location'=>'Amman, Jordan',
                'Phone'=>'+96278467523802',
                'role'=>1
            ]
            ];

            foreach($users as $user)
            {
                User::create($user);
            }
    }
}
