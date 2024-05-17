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
                'img'=>'profile.jpg',
                'location'=>'Amman',
                'Phone'=>'+96276770656454',
                'role'=>1
            ],
            [
                'name'=>'Lana',
                'email' => 'lana@gmail.com',
                'password'=>bcrypt('lanapass'),
                'img'=>'profile.jpg',
                'location'=>'Amman',
                'Phone'=>'+9627626283836',
                'role'=>1
            ],

            [
                'name'=>'Ahmad',
                'email' => 'ahmad@gmail.com',
                'password'=>bcrypt('ahmadpass'),
                'img'=>'profile.jpg',
                'location'=>'Amman, Jordan',
                'Phone'=>'+96278467523802',
                'role'=>0
            ],
            [
                'name'=>'Leen',
                'email' => 'Leen@gmail.com',
                'password'=>bcrypt('Leenpass'),
                'img'=>'profile.jpg',
                'location'=>'Amman, Jordan',
                'Phone'=>'+962775698743',
                'role'=>1
            ]
            ];

            foreach($users as $user)
            {
                User::create($user);
            }
    }
}
