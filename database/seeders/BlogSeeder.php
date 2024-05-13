<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {

        $data = [
            [
                'MainTitle' => 'What Every Pet Owner Should Know',
                'Title' => 'Emergency Pet First Aid: What Every Pet Owner Should Know',
                'Category' => 'Pets',
                'Summary' => "As responsible pet owners, it's essential to be prepared for any unexpected emergencies that may arise. Just as we have first aid kits for ourselves, having one for our furry companions can be lifesaving. In this article, we'll cover some essential tips and techniques for providing first aid to pets in times of need.",
                'Intro' => "Welcome to our pet first aid blog! As responsible pet owners, it's essential to be prepared for any unexpected emergencies that may arise. Just as we have first aid kits for ourselves, having one for our furry companions can be lifesaving. In this article, we'll cover some essential tips and techniques for providing first aid to pets in times of need.",
                'Steps' => json_encode([
                    ["step" => "Know Your Pet's Normal Behavior:", "description" => "Understanding your pet's normal behavior is crucial for recognizing when something is wrong. Pay attention to their eating habits, energy levels, and typical demeanor. Any sudden changes could indicate an underlying issue."],
                    ["step" => "Create a Pet First Aid Kit:", "description" => "Prepare a pet first aid kit and keep it easily accessible. Include items such as gauze pads, adhesive tape, antiseptic wipes, tweezers, scissors, a blanket, a muzzle (for dogs), and your veterinarian's contact information. Having these supplies on hand can make all the difference in an emergency."],
                    ["step" => "Learn Basic First Aid Techniques:", "description" => "Familiarize yourself with basic first aid techniques for pets. This includes how to perform CPR, control bleeding, and treat common injuries such as cuts, burns, and fractures. Taking a pet first aid class or consulting with your veterinarian can provide invaluable knowledge."],
                    ["step" => "Handle with Care:", "description" => "When providing first aid to your pet, remember to handle them gently and calmly. Even the most docile pet may become agitated or fearful when injured. Approach them slowly and speak to them in a soothing voice to help keep them calm."],
                    ["step" => "Know When to Seek Professional Help:", "description" => "While first aid can be crucial in many situations, it's essential to know when to seek professional veterinary care. If your pet is experiencing severe bleeding, difficulty breathing, loss of consciousness, or any other life-threatening symptoms, seek immediate veterinary attention."],
                ]),
                'MainImg' => "petsBlog1.jpg",
                'Photo' => "pets1.jpg",
                'created_at' =>Carbon::now(),
                'Conclusion' => "Being prepared for pet emergencies can make a significant difference in your pet's well-being. By familiarizing yourself with basic first aid techniques, creating a pet first aid kit, and knowing when to seek professional help, you can be ready to handle any situation that comes your way. Remember, your pet relies on you for their health and safety, so being prepared is key.",
            ],
            [
                'MainTitle' => 'Traveling to Remote Areas: Medical Emergency Preparedness',
                'Title' => 'Preparing for Medical Emergencies While Traveling to Remote Destinations',
                'Category' => 'Travel',
                'Summary' => "Discover essential tips for preparing for medical emergencies while traveling to remote destinations. From packing a travel health kit to learning basic first aid skills and purchasing travel insurance, this blog provides practical advice to ensure your safety and well-being during your adventures off the beaten path.",
                'Intro' => "Welcome to our pet first aid blog! As responsible pet owners, it's essential to be prepared for any unexpected emergencies that may arise. Just as we have first aid kits for ourselves, having one for our furry companions can be lifesaving. In this article, we'll cover some essential tips and techniques for providing first aid to pets in times of need.",
                'Steps' => json_encode([
                    ["step" => "Know Your Pet's Normal Behavior:", "description" => "Understanding your pet's normal behavior is crucial for recognizing when something is wrong. Pay attention to their eating habits, energy levels, and typical demeanor. Any sudden changes could indicate an underlying issue."],
                    ["step" => "Create a Pet First Aid Kit:", "description" => "Prepare a pet first aid kit and keep it easily accessible. Include items such as gauze pads, adhesive tape, antiseptic wipes, tweezers, scissors, a blanket, a muzzle (for dogs), and your veterinarian's contact information. Having these supplies on hand can make all the difference in an emergency."],
                    ["step" => "Learn Basic First Aid Techniques:", "description" => "Familiarize yourself with basic first aid techniques for pets. This includes how to perform CPR, control bleeding, and treat common injuries such as cuts, burns, and fractures. Taking a pet first aid class or consulting with your veterinarian can provide invaluable knowledge."],
                    ["step" => "Handle with Care:", "description" => "When providing first aid to your pet, remember to handle them gently and calmly. Even the most docile pet may become agitated or fearful when injured. Approach them slowly and speak to them in a soothing voice to help keep them calm."],
                    ["step" => "Know When to Seek Professional Help:", "description" => "While first aid can be crucial in many situations, it's essential to know when to seek professional veterinary care. If your pet is experiencing severe bleeding, difficulty breathing, loss of consciousness, or any other life-threatening symptoms, seek immediate veterinary attention."],
                ]),
                'MainImg' => "petsBlog1.jpg",
                'Photo' => "",
                'created_at' =>Carbon::now(),
                'Conclusion' => "Being prepared for pet emergencies can make a significant difference in your pet's well-being. By familiarizing yourself with basic first aid techniques, creating a pet first aid kit, and knowing when to seek professional help, you can be ready to handle any situation that comes your way. Remember, your pet relies on you for their health and safety, so being prepared is key.",
            ],



            // Add more rows as needed
        ];

        foreach ($data as $row) {
            DB::table('blogs')->insert($row);
        }
    }
}
