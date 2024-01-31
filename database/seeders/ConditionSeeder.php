<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $condition = [
            ['condition_name' => 'Usée'],
            ['condition_name' => 'Très peu usée'],
            ['condition_name' => 'Bon état'],
            ['condition_name' => 'Très bon état'],
        ];
        foreach ($condition as $conditionData) {
            Condition::create($conditionData);
        }
    }
}
