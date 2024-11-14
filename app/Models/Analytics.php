<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Analytics extends Model
{
    protected $fillable = ['queue_id', 'total_wait_time', 'total_customers_served'];
    public function queue()
    {
        return $this->belongsTo(Queue::class);
    }
}


// php artisan make:seeder UserSeeder
// php artisan make:seeder QueueSeeder
// php artisan make:seeder QueuePositionSeeder
// php artisan make:seeder ServicePointSeeder
// php artisan make:seeder NotificationSeeder
// php artisan make:seeder AnalyticsSeeder
