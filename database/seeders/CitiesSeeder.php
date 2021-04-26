<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = RajaOngkir::kota()->all();
        foreach($cities as $city){
            City::create([
                'city_id' => $city['city_id'],
                'province_id' => $city['province_id'],
                'city_name' => $city['type'].' '.$city['city_name'],
            ]);
        }
    }
}
