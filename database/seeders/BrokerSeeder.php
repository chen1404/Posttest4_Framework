<?php

namespace Database\Seeders;

use App\Models\Broker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $broker = [
            [

                "papan_pencatatan" => "Utama",
                "frequency" => "7.428",
                "volume" => "27.074.400	",
                "value" => "224.053.285.000"
            ],
            [

                "papan_pencatatan" => "Pengambangan",
                "frequency" => "3.804",
                "volume" => "26.631.400	",
                "value" => "118.720.773.000"
            ],
            [

                "papan_pencatatan" => "Utama & Pengembangan",
                "frequency" => "1.767",
                "volume" => "64.059.200",
                "value" => "15.639.865.000"
            ]

        ];
        foreach ($broker as $bk) {
            Broker::firstOrCreate($bk);
        }
    }
}
