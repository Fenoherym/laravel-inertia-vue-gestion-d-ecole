<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semesters = [
            [
                'name' => 'S1',
                'level_id' => 1
            ],
            [
                'name' => 'S2',
                'level_id' => 1
            ],
            [
                'name' => 'S1',
                'level_id' => 1
            ],
            [
                'name' => 'S3',
                'level_id' => 2
            ],
            [
                'name' => 'S4',
                'level_id' => 2
            ],
            [
                'name' => 'S5',
                'level_id' => 3
            ],
            [
                'name' => 'S6',
                'level_id' => 3
            ],
            [
                'name' => 'S7',
                'level_id' => 4
            ],
            [
                'name' => 'S8',
                'level_id' => 4
            ],
            [
                'name' => 'S9',
                'level_id' => 5
            ],
            [
                'name' => 'S10',
                'level_id' => 5
            ],
        ];

        foreach ($semesters as $semester) {
            Semester::create($semester);
        }
    }
}
