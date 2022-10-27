<?php

namespace Database\Seeders;

use App\Models\Saham;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SahamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $saham = [
            [

                "Kode_Saham" => "BBCA",
                "Nama" => "Bank Central Asia Tbk.",
                "Saham" => "122.042.299.500",
                "Broker_Id" => "1"
            ],
            [

                "Kode_Saham" => "BBRI",
                "Nama" => "Bank Rakyat Indonesia (Persero)",
                "Saham" => "150.043.411.587	",
                "Broker_Id" => "2"
            ],
            [

                "Kode_Saham" => "AGRO",
                "Nama" => "Bank Raya Indonesia Tbk.",
                "Saham" => "22.520.433.863",
                "Broker_Id" => "3"
            ],
            [

                "Kode_Saham" => "NETV",
                "Nama" => "Net Visi Media Tbk.",
                "Saham" => "23.453.177.240",
                "Broker_Id" => "1"
            ],
            [

                "Kode_Saham" => "BATA",
                "Nama" => "Sepatu Bata Tbk.",
                "Saham" => "1.300.000.000	",
                "Broker_Id" => "1"
            ],
            [

                "Kode_Saham" => "ARTO",
                "Nama" => "Bank Jago Tbk.",
                "Saham" => "13.717.687.500",
                "Broker_Id" => "1"
            ],
            [

                "Kode_Saham" => "AMAR",
                "Nama" => "Bank Amar Indonesia Tbk.",
                "Saham" => "13.646.222.000",
                "Broker_Id" => "1"
            ],
            [

                "Kode_Saham" => "BUKA",
                "Nama" => "Bukalapak.com Tbk.",
                "Saham" => "103.062.019.354",
                "Broker_Id" => "1"
            ]
        ];
        $this->call([BrokerSeeder::class]);
        foreach ($saham as $sh) {
            \App\Models\Saham::firstOrCreate($sh);
        }
    }
}
