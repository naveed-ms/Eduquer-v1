<?php

use App\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('cities')->delete();
            $json=File::get('database/data/city.json');
            $data=json_decode($json);
            foreach($data as $obj){
                City::create(array(
                    'id'=>$obj->id,
                    'name'=>$obj->name,
                    'states_id'=>$obj->state_id
                    //'phone_code'=>$obj->phoneCode
                ));
            }
        }

    }
}
