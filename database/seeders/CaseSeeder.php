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
                'MainPhoto' => '',
                'Description' => 'A burn is tissue damage caused by heat, electricity, chemicals, or radiation, and it can happen for various reasons.',
                'Category' => 'Human_Body',
                'Title' => 'Burns',
                'Intro' =>'Burns can result from exposure to heat, chemicals, electricity, or radiation. Knowing how to respond to burns promptly is essential for minimizing pain, preventing infection, and promoting healing.',
                'Signs'=>'Redness, swelling, and blistering at the site of the burn. /Severe pain or discomfort. /Peeling or loss of skin in severe burns. ',
                'Treatment_Procedures'=>" Remove the person from the source of the burn and eliminate any clothing or jewelry near the affected area. If the burn is caused by a chemical, rinse the area with cool water for at least 10-20 minutes. / 
                Place the burned area under cool (not cold) running water for 10-15 minutes, or until the pain subsides. Avoid using ice, as it can further damage the skin. / 
                Cover the burn with a sterile, non-adhesive dressing or a clean cloth. Avoid applying any ointments or creams to the burn, as they can trap heat and increase the risk of infection. /
                For severe burns, burns to the face, hands, feet, or genital area, or burns covering a large area of the body, seek medical attention immediately",
                'Prevention_Tips'=>'Use caution when working with hot objects or liquids. /Keep children away from hot surfaces, such as stoves and heaters. / Test the temperature of bathwater before bathing. / Avoid smoking in bed. / Install smoke detectors in your home and check them regularly. / Keep a first aid kit stocked with supplies for treating burns.',
                'Photo'=>'',
                'Video'=>'https://www.youtube.com/embed/z_5tuB1YMK0?si=O6OnO9EURynFos5H',
            ],
            [
                'MainPhoto' => '',
                'Description' => 'Heat stroke is the bodys failure to regulate temperature due to prolonged exposure to high heat.',
                'Category' => 'Human_Body',
                'Title' => 'Heat Stroke',
                'Intro' =>'Heat stroke is a serious and potentially life-threatening condition that occurs when the bodys temperature regulation system fails due to prolonged exposure to high temperatures. It requires immediate medical attention. Here is what you need to know about recognizing and treating heat stroke. ',
                'Signs'=>'High body temperature (usually 104°F or higher). / Hot, dry skin or profuse sweating. /Rapid pulse. /Headache, dizziness, or nausea. /Confusion, agitation, or unconsciousness. /Muscle cramps or weakness.',
                'Treatment_Procedures'=>"Immediately move the person to a cooler environment, preferably indoors with air conditioning. If that's not possible, find a shaded area. /Remove excess clothing and apply cool, wet cloths or towels to the skin. Fan the person to promote sweating and evaporation. /Offer the person cool water or a sports drink to help rehydrate. Avoid alcohol and caffeine. /Continuously monitor their temperature and watch for signs of deterioration. If the person loses consciousness, call emergency services immedia",
                'Prevention_Tips'=>'Stay hydrated by drinking plenty of fluids, especially water, during hot weather. / Avoid strenuous activities during the hottest part of the day. Wear lightweight, light-colored, and loose-fitting clothing.  Take regular breaks in the shade or indoors during hot weather.  Never leave children or pets unattended in parked vehicles.  Be aware of the signs of heat-related illnesses and take action if you or someone else shows symptoms',
                'Photo'=>'',
                'Video'=>'https://www.youtube.com/embed/lEOC_vccLSE?si=qQQLOCn-BAq6DTGW',
            ],
            [
                'MainPhoto' => '',
                'Description' => 'Shock is a life-threatening condition caused by inadequate blood flow, leading to organ dysfunction and potentially death.',
                'Category' => 'Human_Body',
                'Title' => 'Shock',
                'Intro' =>'Shock is a life-threatening medical emergency that occurs when the bodys organs and tissues are not receiving an adequate flow of blood and oxygen. It can result from various causes, including severe injury, illness, or loss of blood. Recognizing the signs of shock and providing prompt first aid is essential for improving the persons chances of survival.',
                'Signs'=>"Pale cold, and clammy skin. / Rapid, weak pulse. /Rapid, shallow breathing. /Weakness or dizziness. /Nausea or vomiting. /Confusion or loss of consciousness. /",
                'Treatment_Procedures'=>"Call for help: Call emergency services immediately. /Help the person lie down on their back. If they have difficulty breathing, raise their legs about 12 inches to improve blood flow to vital organs. / Cover the person with a blanket or clothing to keep them warm and prevent hypothermia. /Continuously monitor their breathing and pulse until help arrives. Be prepared to perform CPR if they stop breathing or their pulse stops.",
                'Prevention_Tips'=>"Learn and recognize the signs of shock. /Stay calm and reassure the person while waiting for help to arrive. /Treat any underlying causes of shock, such as bleeding, if possible. /Keep a first aid kit stocked with supplies for treating shock. ",
                'Photo'=>'',
                'Video'=>'https://www.youtube.com/embed/61urGQrmeNM?si=AcQdZo27UEZbpX7D',
            ],
            
            

            // Add more rows as needed
        ];

        foreach ($data as $row) {
            DB::table('my_cases')->insert($row);
        }
    }
}
