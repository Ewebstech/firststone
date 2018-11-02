<?php

use App\Property;
use Illuminate\Database\Seeder;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [
            [
                'investmenttype'=> 'land',
                'title' => '25A, Road 5, Lekki Phase 3, Ikota',
                'address' => '25A, Road 5, Lekki Phase 3, Ikota',
                'amount' => '5000000',
                'type' => 'default',
                'description' => 'This is a 5 bedroom, 1.5 bathroom, single family home. It is spacious and located in Lagos.',
                'image_name' => '1.jpg', 
                'thumbnail_image' => 'test.jpg'  
            ],

            [
                'investmenttype'=> 'land',
                'title' => '62D, Holland Way, Ikeja, Lagos',
                'address' => '62D, Holland Way, Ikeja, Lagos',
                'amount' => '5000000',
                'type' => 'default',
                'description' => 'This is a 5 bedroom, 1.5 bathroom, single family home. It is spacious and located in Lagos.',
                'image_name' => '2.jpg',  
                'thumbnail_image' => 'test.jpg'  
            ],

            [
                'investmenttype'=> 'land',
                'title' => '664, Boston Avenue, Epe, Lagos',
                'address' => '664, Boston Avenue, Epe, Lagos',
                'amount' => '5000000',
                'type' => 'default',
                'description' => 'This is a 5 bedroom, 1.5 bathroom, single family home. It is spacious and located in Lagos.',
                'image_name' => '3.jpg',   
                'thumbnail_image' => 'test.jpg'  
            ],

        ];

        foreach($properties as $property) {
            Property::create($property);
        }

    }
}
