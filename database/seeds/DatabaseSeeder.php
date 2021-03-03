<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(program_data_seeder::class);
        $this->call(CanadianCitiesSeeder::class);
		$this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        // $this->call(IntakeProgramSeeder::class); //new
    }
}
