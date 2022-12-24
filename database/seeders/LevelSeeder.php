<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [
            [
                'name' => 'L1',
            ],
            [
                'name' => 'L2',
            ],
            [
                'name' => 'L3',
            ],
            [
                'name' => 'M1',
            ],
            [
                'name' => 'M2',
            ]
        ];

        foreach ($levels as $level) {
            Level::create($level);
        }
    }
}
