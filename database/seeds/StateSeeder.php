<?php

use Illuminate\Database\Seeder;
use App\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();
        $json=File::get("database/data/state.json");
        $data=json_decode($json);
        foreach($data as $obj){
            State::create(array(

                'id'=>$obj->id,
                'name'=>$obj->name,
                'country_id'=>$obj->country_id,
            ));
        }
    }
}
