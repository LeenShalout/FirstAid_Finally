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
                'MainPhoto' => 'Bleeding.jpeg',
                'Description' => 'Bleeding is the escape of blood from a damaged blood vessel, and it can occur for various reasons.',
                'Category' => 'Human_Body',
                'Title' => 'Bleeding',
                'Intro' =>'Bleeding, whether from a minor cut or a more serious injury, requires prompt attention to minimize blood loss and prevent complications. Knowing how to respond effectively to bleeding can make a significant difference in the outcome of an emergency situation.',
                'Signs'=>'Visible blood at the site of the injury or on clothing. / Pain or discomfort at the wound site. / Weakness, dizziness, or fainting due to blood loss.',
                'Treatment_Procedures'=>"Use a clean cloth or sterile dressing to apply firm pressure directly to the wound. This helps to stem the flow of blood and promote clotting. / If possible, elevate the wound above the level of the heart to help reduce blood flow. / Continue applying pressure until the bleeding stops. If blood soaks through the cloth, add more layers without removing the original dressing. / Once bleeding has stopped, secure the dressing in place with a bandage or tape. Ensure it's not too tight to impede circulation. / Keep a close eye on the individual's condition. If bleeding resumes or signs of shock develop, seek medical help immediately.",
                'Prevention_Tips'=>'Handle sharp objects carefully to avoid accidental cuts. / Wear protective gear such as gloves when engaging in activities prone to injury. / Keep a first aid kit stocked with supplies for treating minor cuts and wounds. / Maintain up-to-date tetanus vaccination to reduce the risk of infection from dirty or rusty wounds. / Educate yourself and others on basic first aid techniques to respond effectively in emergencies.',
                'Photo'=>'BleedingCase.jpeg',
                'Video'=>'https://www.youtube.com/embed/8sEijZkfUHI?si=6koRBLnhWOy9YAVH',
            ],
            [
                'MainPhoto' => 'burns.png',
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
                'Photo'=>'burnsCases.jpeg',
                'Video'=>'https://www.youtube.com/embed/z_5tuB1YMK0?si=O6OnO9EURynFos5H',
            ],
            [
                'MainPhoto' => 'HeatStroke.jpeg',
                'Description' => 'Heat stroke is the bodys failure to regulate temperature due to prolonged exposure to high heat.',
                'Category' => 'Human_Body',
                'Title' => 'Heat Stroke',
                'Intro' =>'Heat stroke is a serious and potentially life-threatening condition that occurs when the bodys temperature regulation system fails due to prolonged exposure to high temperatures. It requires immediate medical attention. Here is what you need to know about recognizing and treating heat stroke. ',
                'Signs'=>'High body temperature (usually 104°F or higher). / Hot, dry skin or profuse sweating. /Rapid pulse. /Headache, dizziness, or nausea. /Confusion, agitation, or unconsciousness. /Muscle cramps or weakness.',
                'Treatment_Procedures'=>"Immediately move the person to a cooler environment, preferably indoors with air conditioning. If that's not possible, find a shaded area. /Remove excess clothing and apply cool, wet cloths or towels to the skin. Fan the person to promote sweating and evaporation. /Offer the person cool water or a sports drink to help rehydrate. Avoid alcohol and caffeine. /Continuously monitor their temperature and watch for signs of deterioration. If the person loses consciousness, call emergency services immedia",
                'Prevention_Tips'=>'Stay hydrated by drinking plenty of fluids, especially water, during hot weather. / Avoid strenuous activities during the hottest part of the day. Wear lightweight, light-colored, and loose-fitting clothing.  Take regular breaks in the shade or indoors during hot weather.  Never leave children or pets unattended in parked vehicles.  Be aware of the signs of heat-related illnesses and take action if you or someone else shows symptoms',
                'Photo'=>'HeatStrokeCases.jpeg',
                'Video'=>'https://www.youtube.com/embed/lEOC_vccLSE?si=qQQLOCn-BAq6DTGW',
            ],
            /*[
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
            [
                'MainPhoto' => '',
                'Description' => 'Strains and sprains are common injuries involving muscles or ligaments, causing pain, swelling, and limited movement.',
                'Category' => 'Human_Body',
                'Title' => 'Strains and Sprains',
                'Intro' =>'Strains and sprains are common injuries that can occur during physical activity, sports, or everyday tasks. While they may seem similar, strains and sprains affect different parts of the body. Knowing how to recognize and treat strains and sprains promptly can help speed up recovery and prevent further injury.',
                'Signs'=>"Pain, tenderness, or soreness around the injured area. /Swelling, bruising, or redness. /Limited range of motion or difficulty moving the affected joint or muscle. /A popping or tearing sensation at the time of injury. /Recognizing these signs promptly is crucial for providing timely assistance.",
                'Treatment_Procedures'=>"Avoid using the injured muscle or joint to prevent further damage. /Apply ice to the injured area for 15-20 minutes every 2-3 hours during the first 48 hours to reduce swelling and pain. /Use a compression bandage to help reduce swelling. Make sure it's snug but not too tight. /Elevate the injured limb above the level of the heart to help reduce swelling. /Take over-the-counter pain medication, such as ibuprofen or acetaminophen, to help reduce pain and inflammation. /Once the acute pain and swelling have subsided, start gentle stretching and strengthening exercises to help restore mobility and strength to the injured area.",
                'Prevention_Tips'=>"Warm up before engaging in physical activity or sports to prepare muscles and joints for movement. /Use proper techniques and equipment during physical activity to avoid injury. /Wear supportive footwear and use protective gear, such as braces or wraps, if necessary. /Gradually increase the intensity and duration of physical activity to avoid overexertion. /Listen to your body and stop activity if you feel pain or discomfort. ",
                'Photo'=>'',
                'Video'=>'https://www.youtube.com/embed/9QihE9DqLTM?si=4sEP2C5nyWH7Tr4l',
            ],
            [
                'MainPhoto' => '',
                'Description' => 'Unconsciousness can result from various medical conditions such as head injury, stroke, seizures, drug overdose, or heart attack.',
                'Category' => 'Human_Body',
                'Title' => 'Unconscious and Breathing',
                'Intro' =>'Encountering someone who is unconscious but breathing is a critical situation that requires immediate attention. Understanding how to respond effectively can help maintain the persons airway and breathing until professional medical help arrives.',
                'Signs'=>"The person does not respond to verbal or physical stimuli. /Chest movements indicate breathing, but the person is unresponsive. / The person may exhibit symptoms of shock, such as pale, cool, clammy skin, and a weak pulse.",
                'Treatment_Procedures'=>"Ensure the area is safe for both you and the unconscious person. Look for hazards such as traffic, fire, or electrical wires. /Gently shake the person's shoulders and ask loudly, 'Are you okay?' Look, listen, and feel for breathing. /If the person is not breathing, place them on their back and tilt their head back and lift their chin to open the airway. /Look for chest movement, listen for breathing sounds, and feel for breath on your cheek. /If the person is not breathing, or if you're unsure, call emergency services immediately. If someone else is present, have them make the call while you begin first aid. /If the person is not breathing normally, give two slow breaths, each lasting about 1 second, while watching for chest rise. If their chest doesn't rise, reposition the head and try again. /If you cannot detect a pulse, start CPR immediately.",
                'Prevention_Tips'=>"Learn basic CPR and first aid skills to be prepared for emergencies. /Keep emergency contact numbers handy and know how to access them quickly. /Regularly check the expiration dates of your CPR certification and renew as necessary. /Encourage others to learn CPR and basic first aid skills.",
                'Photo'=>'',
                'Video'=>'https://www.youtube.com/embed/bjnCp0enmwU?si=rdoxOCjGkbZSrbod',
            ],
             ////////

            [
                'MainPhoto' => '',
                'Description' => 'Dog bites break the skin, causing puncture wounds or lacerations, and can lead to infection or other complications.',
                'Category' => 'Animal_Related_Injuries',
                'Title' => 'Dog Bites',
                'Intro' =>'Dog bites can happen unexpectedly and can range from minor injuries to severe wounds. Knowing how to respond to a dog bite can help prevent infection and minimize the risk of complications.',
                'Signs'=>"Puncture wounds or cuts from the dog's teeth. /Bruising or swelling around the bite area. /Bleeding or oozing from the wound. /Pain or tenderness at the site of the bite. /Redness or warmth around the wound.",
                'Treatment_Procedures'=>"Wash the bite wound with soap and water as soon as possible. This helps remove bacteria and reduce the risk of infection. Apply pressure to the wound with a clean cloth or bandage to stop any bleeding. Elevate the injured area if possible. After cleaning the wound, apply an over-the-counter antibiotic ointment to help prevent infection. Cover the bite with a clean, sterile bandage or dressing to protect it from dirt and bacteria. /Seek medical attention if the bite is deep, bleeding heavily, or if there are signs of infection such as redness, swelling, warmth, or pus. /If the dog's owner is known, report the bite to them. If the dog is unknown or stray, contact animal control to report the incident.",
                'Prevention_Tips'=>"Approach dogs cautiously, especially if you are unfamiliar with them. /Avoid disturbing dogs while they are eating, sleeping, or caring for puppies. /Do not run from a dog or make sudden movements. /Do not disturb a dog that is caring for puppies. /Teach children how to safely interact with dogs and to never approach unfamiliar dogs without permission from the owner.",
                'Photo'=>'',
                'Video'=>'https://www.youtube.com/embed/iF5w35PG79k?si=6qACI-5cx_UE9ImU',
            ],
            [
                'MainPhoto' => '',
                'Description' => 'Cat scratches can break the skin, causing superficial wounds that may lead to pain, redness, and in some cases, infection.',
                'Category' => 'Animal_Related_Injuries',
                'Title' => 'Cat Scratches',
                'Intro' =>'Cat scratches are common injuries that can occur when a cats claws come into contact with human skin. While most cat scratches are minor, they can become infected if not properly cleaned and treated. Knowing how to respond to a cat scratch can help prevent infection and promote healing.',
                'Signs'=>"Redness, swelling, or inflammation around the scratch. /Pain or tenderness at the site of the scratch. /Bleeding or oozing from the wound. /Formation of a scab or crust over the scratch.",
                'Treatment_Procedures'=>"Wash the scratch with soap and water as soon as possible. This helps remove bacteria and reduce the risk of infection. /Apply pressure to the scratch with a clean cloth or bandage to stop any bleeding. Elevate the injured area if possible. /After cleaning the scratch, apply an over-the-counter antibiotic ointment to help prevent infection. /Cover the scratch with a clean, sterile bandage or dressing to protect it from dirt and bacteria. /Seek medical attention if the scratch is deep, bleeding heavily, or if there are signs of infection such as redness, swelling, warmth, or pus. /Keep an eye on the scratch for any signs of infection, such as increasing redness, swelling, warmth, or pus. If infection occurs, seek medical attention immediately.",
                'Prevention_Tips'=>"Handle cats gently and avoid rough play. /Trim your cat's nails regularly to reduce the risk of scratches. /Avoid provoking or startling cats, especially if they are known to scratch. /Wash your hands after handling cats, especially if you have any cuts or scratches on your hands.",
                'Photo'=>'',
                'Video'=>'https://www.youtube.com/embed/Li77KsAXtLI?si=qJ7rXL0CegjaFW6o',
            ],
            [
                'MainPhoto' => '',
                'Description' => 'Bee stings inject venom into the skin, causing pain, redness, swelling, and sometimes allergic reactions.',
                'Category' => 'Animal_Related_Injuries',
                'Title' => 'Bee Stings',
                'Intro' =>'Bee stings occur when a bee feels threatened and injects venom into the skin. While most bee stings cause only minor discomfort, some people may have allergic reactions that require immediate medical attention. Knowing how to respond to a bee sting can help relieve pain and minimize the risk of complications.',
                'Signs'=>"Pain or burning sensation at the site of the sting. /Redness, swelling, and itching around the sting area. /Formation of a raised welt or rash. /In some cases, more severe allergic reactions may occur, including difficulty breathing, swelling of the face or throat, rapid heartbeat, dizziness, or hives.",
                'Treatment_Procedures'=>"If a bee's stinger is left in the skin, remove it as quickly as possible to prevent more venom from being released. Scrape the stinger out sideways using a fingernail or a blunt-edged object like a credit card. /Wash the sting area with soap and water to help prevent infection. /Apply a cold compress, such as ice wrapped in a cloth, to the sting area to reduce pain and swelling. /Take over-the-counter pain relievers such as ibuprofen or acetaminophen to help reduce pain and inflammation. /Apply a topical hydrocortisone cream or calamine lotion to the sting area to help relieve itching and inflammation. /Keep an eye on the sting area and your overall condition for any signs of an allergic reaction. If you experience symptoms such as difficulty breathing, swelling of the face or throat, rapid heartbeat, dizziness, or hives, seek immediate medical attention.",
                'Prevention_Tips'=>"Avoid wearing brightly colored clothing and floral prints, which can attract bees. /Avoid wearing perfumes, scented lotions, or hair products with strong fragrances. /Be cautious around areas where bees are likely to be present, such as flowers, garbage cans, and outdoor food areas. /If you know you are allergic to bee stings, carry an epinephrine auto-injector (EpiPen) with you at all times and make sure your family, friends, and coworkers know how to use it in case of an emergency.",
                'Photo'=>'',
                'Video'=>'https://www.youtube.com/embed/01Po5RTNfhs?si=pM37ewDTErOh1pyr',
            ],
            [
                'MainPhoto' => '',
                'Description' => 'Snake bites inject venom into the skin, causing pain, swelling, and in severe cases, tissue damage or systemic symptoms.',
                'Category' => 'Animal_Related_Injuries',
                'Title' => 'Snake Bites',
                'Intro' =>'Snake bites occur when a snake injects venom into the skin. While most snake bites are not fatal, some snake species have venom that can cause serious injury or death if not treated promptly. Knowing how to respond to a snake bite can help minimize the risk of complications.',
                'Signs'=>"Two puncture wounds at the site of the bite. /Severe pain or burning sensation at the site of the bite. /Redness, swelling, and bruising around the bite area. /Nausea, vomiting, or dizziness. /Difficulty breathing or swallowing. /Weakness or paralysis in the affected limb. /Blurred vision or other vision problems. /Irregular heartbeat or cardiac arrest (in severe cases).",
                'Treatment_Procedures'=>"Try to stay calm and reassure the person who has been bitten. Panic can increase heart rate and spread venom more quickly through the body. /Keep the bitten limb as still as possible to slow the spread of venom through the bloodstream. If possible, immobilize the limb with a splint or bandage. /Remove any jewelry or tight clothing near the bite site, as swelling may occur. /Wash the bite site with soap and water to help prevent infection. Do not suck out the venom or use a tourniquet, as these methods are not effective and can cause further damage. /This can help slow the spread of venom through the bloodstream. /Seek medical attention immediately, even if the snake is not venomous. The bite wound may still require medical treatment to prevent infection.",
                'Prevention_Tips'=>"Wear protective clothing and footwear when walking in areas where snakes are common. /Watch where you step and avoid tall grass, rocks, and other areas where snakes may hide. /Stay away from snakes and do not attempt to handle or provoke them.",
                'Photo'=>'',
                'Video'=>'https://www.youtube.com/embed/nH8o-bgwo_g?si=6rguCXullvpOrAwM',
            ],
            [
                'MainPhoto' => '',
                'Description' => 'Spider bites can inject venom into the skin, causing pain, redness, swelling, and in some cases, systemic symptoms or allergic reactions.',
                'Category' => 'Animal_Related_Injuries',
                'Title' => 'Spider Bites',
                'Intro' =>'Spider bites occur when a spider injects venom into the skin. While most spider bites cause only minor symptoms, some spider species have venom that can cause serious injury or death if not treated promptly. Knowing how to respond to a spider bite can help minimize the risk of complications.',
                'Signs'=>"Redness, swelling, and itching at the site of the bite. /Pain or burning sensation at the bite site. /Formation of a raised welt or rash. /Muscle pain or cramping. /Headache or fever. /Nausea or vomiting. /In some cases, more severe allergic reactions may occur, including difficulty breathing, swelling of the face or throat, rapid heartbeat, dizziness, or hives.",
                'Treatment_Procedures'=>"Wash the bite area with soap and water to help prevent infection. /Apply a cold compress, such as ice wrapped in a cloth, to the bite area to reduce pain and swelling. /Take over-the-counter pain relievers such as ibuprofen or acetaminophen to help reduce pain and inflammation. /Apply a topical hydrocortisone cream or calamine lotion to the bite area to help relieve itching and inflammation. /Seek medical attention if the bite is painful, if the swelling worsens, or if you experience signs of infection such as increasing redness, warmth, or pus. /Keep an eye on the bite area and your overall condition for any signs of an allergic reaction. If you experience symptoms such as difficulty breathing, swelling of the face or throat, rapid heartbeat, dizziness, or hives, seek immediate medical attention.",
                'Prevention_Tips'=>"Wear protective clothing and footwear when working outdoors, especially in areas where spiders are common. /Shake out clothing, shoes, and bedding before use, as spiders may hide in these items. /Keep your home clean and clutter-free to reduce hiding places for spiders.",
                'Photo'=>'',
                'Video'=>'https://www.youtube.com/embed/Bl4umLwUpWs?si=8G6QGJBLISCcWSJG',
            ],
           

            ///////////

            [
                'MainPhoto' => '',
                'Description' =>'An Earthquake is the shaking of the surface of the Earth resulting from a sudden release of energy in the Earths lithosphere that creates seismic waves.',
                'Category' => 'Natural_Disasters',
                'Title' => 'Earthquakes',
                'Intro' =>"Earthquakes are natural disasters caused by the sudden release of energy in the Earth's crust, resulting in seismic waves. They can cause significant damage to buildings, infrastructure, and can result in injuries or fatalities. Knowing what to do before, during, and after an earthquake can help minimize the risk of injury and property damage.",
                'Before'=>"Identify safe spots in each room of your home, such as under sturdy tables or desks, away from windows and heavy objects. /Secure heavy furniture, bookcases, and appliances to the wall to prevent them from tipping over during an earthquake. /Prepare an emergency kit with essential supplies such as water, non-perishable food, a first aid kit, flashlight, and battery-powered radio. /Develop a family emergency plan that includes evacuation routes, meeting points, and communication methods.",
                'During'=>"Drop to the ground, take cover under a sturdy piece of furniture, and hold on until the shaking stops. /If you are indoors, stay there. Move away from windows, glass, and heavy objects that could fall. /If you are outdoors, move to an open area away from buildings, trees, streetlights, and utility wires. /Remain calm and reassure others around you.",
                'After'=>"Check yourself and others for injuries. Provide first aid if necessary. /Check for damage to your home, such as gas leaks, electrical damage, or structural damage. If you smell gas, turn off the gas valve and leave the building immediately. /Listen to the radio or check official sources for updates and instructions from local authorities. /Check on neighbors, especially the elderly or disabled, and offer assistance if needed. /Be prepared for aftershocks, which can occur after the initial earthquake. Drop, cover, and hold on during aftershocks.",
                'Prevention_Tips'=>"Secure heavy items and furniture to prevent them from falling during an earthquake. /Practice earthquake drills with your family or household members. /Know the location of utility shut-off valves and how to turn them off.",
                'Photo'=>'',
                'Video'=>'https://www.youtube.com/embed/TnoNdCsftnY?si=PFcmYT-tWlA3LJ_j',
            ],
            [
                'MainPhoto' => '',
                'Description' =>'Floods occur when an area is submerged in water, often due to heavy rainfall, overflowing rivers, or storm surges from the ocean.',
                'Category' => 'Natural_Disasters',
                'Title' => 'Floods',
                'Intro' =>"Floods are natural disasters that occur when an area becomes submerged in water. They can result from heavy rainfall, snowmelt, storm surges, or dam failures. Floods can cause extensive damage to property, infrastructure, and can pose serious risks to human life. Knowing what to do before, during, and after a flood can help keep you and your loved ones safe.",
                'Before'=>"Monitor weather forecasts and flood warnings from local authorities. /Assemble an emergency kit with essential supplies such as water, non-perishable food, a first aid kit, flashlight, batteries, and important documents. /Develop a family emergency plan that includes evacuation routes, meeting points, and communication methods. /If you live in a flood-prone area, consider installing flood barriers, sump pumps, and moving electrical outlets and appliances to higher levels.",
                'During'=>"Listen to the radio or check official sources for updates and instructions from local authorities. /If you are advised to evacuate, do so immediately. Follow designated evacuation routes and do not attempt to drive through flooded areas. /Move to higher ground if you are trapped in a building or if floodwaters are rising. Avoid basements and lower floors. /Avoid walking or driving through floodwaters. Just six inches of fast-flowing water can knock you off your feet, and two feet of water can float a car.",
                'After'=>"Wait for authorities to declare it safe before returning home. Be cautious when entering a flooded area, as floodwaters can hide hazards such as debris, downed power lines, and contamination. /Inspect your home for damage before entering. Look for signs of structural damage, gas leaks, electrical damage, and sewage contamination. /Take photos of any damage to your property and belongings for insurance purposes. /Throw away any food, water, or medication that may have come into contact with floodwaters.",
                'Prevention_Tips'=>"Keep gutters and drains clear of debris to allow water to flow freely away from your home. /Elevate electrical outlets, switches, sockets, and appliances at least 12 inches above the expected flood level. /Install a sump pump and a backflow valve in your basement to prevent water from backing up into your home.",
                'Photo'=>'',
                'Video'=>'https://www.youtube.com/embed/dvuGyLZh-og?si=_UaYklLHjopECg98',
            ],
*/
            // Add more rows as needed
        ];

        foreach ($data as $row) {
            DB::table('my_cases')->insert($row);
        }
    }
}
