<?php

namespace Database\Seeders;

use App\Models\Workshop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {

            $data = [
                [
                    'title' => 'Basic First Aid Workshop for Beginners',
                    'description' => 'Covering the fundamental concepts of first aid, and teaching how to respond to common emergencies such as wounds, fractures, burns, severe bleeding, and drownings', // Path to your image
                    'photo' => 'basic.jpg',
                    'workshop_date' =>'2024-05-12',
                    'workshop_type'=>'Online'
                ],
                [
                    'title' => 'Advanced First Aid Workshop',
                    'description' => 'Training on cardiopulmonary resuscitation (CPR) procedures and the use of automated external defibrillators (AEDs), and practice using AED devices.', // Path to your image
                    'photo' => 'advanced.jpg',
                    'workshop_date' =>'2024-05-12',
                    'workshop_type'=>'On Site'
                ],
                [
                    'title' => 'Family First Aid Workshop',
                    'description' => 'Providing first aid training for families and how to handle household emergencies, and teaching children and teenagers basic first aid procedures.', // Path to your image
                    'photo' => 'family.jpg',
                    'workshop_date' =>'2024-05-12',
                    'workshop_type'=>'On site'
                ],
                [
                    'title' => 'Corporate and Institutional Workshop',
                    'description' => 'Training employees in workplace emergency first aid and first aid protocols, and teaching how to deal with common emergencies in the workplace such as traffic accidents, minor injuries, and others.', // Path to your image
                    'photo' => 'institution.jpg',
                    'workshop_date' =>'2024-05-12',
                    'workshop_type'=>'Online'
                ],
                [
                    'title' => 'Sports First Aid Workshop',
                    'description' => 'Training on how to deal with common sports injuries such as muscle tears and ligament sprains, and providing tips for preventing sports injuries and how to recover from them.', // Path to your image
                    'photo' => 'sport.jpg',
                    'workshop_date' =>'2024-05-12',
                    'workshop_type'=>'On site',
                ],
                [
                    'title' => 'Workshop on First Aid for Trips and Outdoor Adventures',
                    'description' => 'Training on how to handle common injuries during trips and hikes in nature, and providing information on first aid in remote environments away from medical services.', // Path to your image
                    'photo' => 'adventures.jpg',
                    'workshop_date' =>'2024-05-12',
                    'workshop_type'=>'On site',
                ],
                // Add more rows as needed
            ];

            foreach ($data as $row) {
                DB::table('workshops')->insert($row);
            }
        }

}
