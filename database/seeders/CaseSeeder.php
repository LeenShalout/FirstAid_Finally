<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {

        $data = [
            [
                'MainPhoto' => 'bleeding.jpg',
                'Description' => 'Bleeding is the escape of blood from a damaged blood vessel, and it can occur for various reasons.',
                'Category' => 'Human_Body',
                'Title' => 'Bleeding',
                'Intro' =>'Bleeding, whether from a minor cut or a more serious injury, requires prompt attention to minimize blood loss and prevent complications. Knowing how to respond effectively to bleeding can make a significant difference in the outcome of an emergency situation.',
                'Signs'=>'Visible blood at the site of the injury or on clothing. / Pain or discomfort at the wound site. / Weakness, dizziness, or fainting due to blood loss.',
                'Treatment_Procedures'=>"Use a clean cloth or sterile dressing to apply firm pressure directly to the wound. This helps to stem the flow of blood and promote clotting. / If possible, elevate the wound above the level of the heart to help reduce blood flow. / Continue applying pressure until the bleeding stops. If blood soaks through the cloth, add more layers without removing the original dressing. / Once bleeding has stopped, secure the dressing in place with a bandage or tape. Ensure it's not too tight to impede circulation. / Keep a close eye on the individual's condition. If bleeding resumes or signs of shock develop, seek medical help immediately.",
                'Prevention_Tips'=>'Handle sharp objects carefully to avoid accidental cuts. / Wear protective gear such as gloves when engaging in activities prone to injury. / Keep a first aid kit stocked with supplies for treating minor cuts and wounds. / Maintain up-to-date tetanus vaccination to reduce the risk of infection from dirty or rusty wounds. / Educate yourself and others on basic first aid techniques to respond effectively in emergencies.',
                'Photo'=>'bleedingCase.jpg',
                'Video'=>'https://www.youtube.com/embed/8sEijZkfUHI?si=6koRBLnhWOy9YAVH',
            ],
            [
                'MainPhoto' => 'bleeding.jpg',
                'Description' => 'Bleeding is the escape of blood from a damaged blood vessel, and it can occur for various reasons.',
                'Category' => 'Human_Body',
                'Title' => 'Bleeding',
                'Intro' =>'Bleeding, whether from a minor cut or a more serious injury, requires prompt attention to minimize blood loss and prevent complications. Knowing how to respond effectively to bleeding can make a significant difference in the outcome of an emergency situation.',
                'Signs'=>'Visible blood at the site of the injury or on clothing. / Pain or discomfort at the wound site. / Weakness, dizziness, or fainting due to blood loss.',
                'Treatment_Procedures'=>"Use a clean cloth or sterile dressing to apply firm pressure directly to the wound. This helps to stem the flow of blood and promote clotting. / If possible, elevate the wound above the level of the heart to help reduce blood flow. / Continue applying pressure until the bleeding stops. If blood soaks through the cloth, add more layers without removing the original dressing. / Once bleeding has stopped, secure the dressing in place with a bandage or tape. Ensure it's not too tight to impede circulation. / Keep a close eye on the individual's condition. If bleeding resumes or signs of shock develop, seek medical help immediately.",
                'Prevention_Tips'=>'Handle sharp objects carefully to avoid accidental cuts. / Wear protective gear such as gloves when engaging in activities prone to injury. / Keep a first aid kit stocked with supplies for treating minor cuts and wounds. / Maintain up-to-date tetanus vaccination to reduce the risk of infection from dirty or rusty wounds. / Educate yourself and others on basic first aid techniques to respond effectively in emergencies.',
                'Photo'=>'bleedingCase.jpg',
                'Video'=>'https://www.youtube.com/embed/8sEijZkfUHI?si=6koRBLnhWOy9YAVH',
            ],

            // Add more rows as needed
        ];

        foreach ($data as $row) {
            DB::table('my_cases')->insert($row);
        }
    }
}
