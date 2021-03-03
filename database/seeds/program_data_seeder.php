<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class program_data_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        DB::table('program_data')->insert([
            [
                'program_name' => 'Accounting',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Agricultural Sciences',
                'created_at' => $now,
                'updated_at' => $now
            ]
            ,
            [
                'program_name' => 'Art & Design',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Biological & Life Sciences',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Building & Architecture',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Business',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Chemistry',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Environment Science',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Finance',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Geography',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Health & Medicine',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'History',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Hospitality & Tourism',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Human Welfare Studies & Services',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Information Science and Library Management',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Language & Culture',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Law & Legal Studies',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Marketing, Media & Communication',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Performing Arts & Music',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Pharmacy',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Physics',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Political & Social Sciences',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'program_name' => 'Teaching & Education',
                'created_at' => $now,
                'updated_at' => $now
            ]
        ]);
    }
}
