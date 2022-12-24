<?php

namespace Database\Seeders;

use App\Models\SchoolYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $years = [
            [
                'year_school' => '2022-2023',
                'active' => true
            ],
            [
                'year_school' => '2023-2024',
                'active' => false
            ],
        ];

        foreach ($years as $year) {
            SchoolYear::create($year);
        }
    }
}
