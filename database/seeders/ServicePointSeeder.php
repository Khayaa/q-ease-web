<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Queue;
use App\Models\ServicePoint;

class ServicePointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $queues = Queue::all();

        foreach ($queues as $queue) {
            ServicePoint::create([
                'queue_id' => $queue->id,
                'name' => 'Service Point 1',
                'status' => 'Open',
            ]);

            ServicePoint::create([
                'queue_id' => $queue->id,
                'name' => 'Service Point 2',
                'status' => 'Open',
            ]);

            ServicePoint::create([
                'queue_id' => $queue->id,
                'name' => 'Service Point 3',
                'status' => 'Closed',
            ]);
            ServicePoint::create([
                'queue_id' => $queue->id,
                'name' => 'Service Point 4',
                'status' => 'Open',
            ]);

            ServicePoint::create([
                'queue_id' => $queue->id,
                'name' => 'Service Point 5',
                'status' => 'Closed',
            ]);

            ServicePoint::create([
                'queue_id' => $queue->id,
                'name' => 'Service Point 6',
                'status' => 'Open',
            ]);

            ServicePoint::create([
                'queue_id' => $queue->id,
                'name' => 'Service Point 7',
                'status' => 'Closed',
            ]);

            ServicePoint::create([
                'queue_id' => $queue->id,
                'name' => 'Service Point 8',
                'status' => 'Open',
            ]);

    }
}
}
