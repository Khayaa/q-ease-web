<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Queue;
use App\Models\QueuePosition;
use App\Models\User;

class QueuePositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $queues = Queue::all();

        foreach ($queues as $queue) {
            foreach ($users as $index => $user) {
                QueuePosition::create([
                    'user_id' => $user->id,
                    'queue_id' => $queue->id,
                    'position' => $index + 1,
                    'estimated_time' => ($index + 1) * 10, // Example: 10 minutes per position
                    'check_in_status' => false,
                    'notification_sent' => false,
                ]);
            }
        }
    }
}
