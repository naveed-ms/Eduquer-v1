<?php

use Illuminate\Database\Seeder;
use File as File;
use Carbon\Carbon;

class CanadianCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        $json = File::get('database/data/canadian_cities.json');
        $data = json_decode($json);
        $data = (array) $data;
        foreach ($data as $c_cities) {
            DB::table('canadian_cities')->insert(array(
                'city_name' => $c_cities->city,
                'province' => $c_cities->province_name,
                'created_at' => $now,
                'updated_at' => $now
            ));
        }
    }
}
