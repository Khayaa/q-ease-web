<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Queue;

class QueueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Queue::create([
            'name' => 'Home Affairs Queue',
            'location' => 'Pretoria',
            'average_wait_time' => 120,
        ]);

        Queue::create([
            'name' => 'Bank Queue',
            'location' => 'Johannesburg',
            'average_wait_time' => 45,
        ]);

        Queue::create([
            'name' => 'Clinic Queue',
            'location' => 'Cape Town',
            'average_wait_time' => 60,
        ]);

        Queue::create([
            'name' => 'Post Office Queue',
            'location' => 'Durban',
            'average_wait_time' => 30,
        ]);

        Queue::create([
            'name' => 'University Registration Queue',
            'location' => 'Stellenbosch',
            'average_wait_time' => 90,
        ]);
    }
}
