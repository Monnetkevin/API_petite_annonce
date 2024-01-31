<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            ['status_name' => 'En traitement'],
            ['status_name' => 'En vente'],
            ['status_name' => 'Vendu'],
        ];
        foreach ($status as $statusData) {
            Status::create($statusData);
        }
    }
}
