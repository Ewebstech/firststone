<?php

use App\Investment;
use Illuminate\Database\Seeder;

class InvestmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $investments = [
            [
                'investmenttype' => 'Land Investment',
                'dealsize' => '2 Plots Of Lands',
                'dealunits' => '2 Units',
                'amount' => '5000000',
                'minreturns' => '1000000',
                'address' => '45, Road 3, Garki, Abuja',
                'image_name' => '1.jpg'
            ],

            [
                'investmenttype' => 'Land Investment',
                'dealsize' => '2 Plots Of Lands',
                'dealunits' => '2 Units',
                'amount' => '5000000',
                'minreturns' => '1000000',
                'address' => '62D, Holland Way, Ikeja, Lagos',
                'image_name' => '2.jpg'
            ],

            [
                'investmenttype' => 'Land Investment',
                'dealsize' => '2 Plots Of Lands',
                'dealunits' => '2 Units',
                'amount' => '5000000',
                'minreturns' => '1000000',
                'address' => '664, Boston Avenue, Epe, Lagos',
                'image_name' => '3.jpg'
            ],

        ];

            foreach($investments as $investment) {
                Investment::create($investment);
            } 
    }
}
