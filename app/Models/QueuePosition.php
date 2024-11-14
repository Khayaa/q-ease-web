<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QueuePosition extends Model
{
    protected $fillable = ['user_id', 'queue_id', 'position', 'estimated_time', 'check_in_status', 'notification_sent'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function queue()
    {
        return $this->belongsTo(Queue::class);
    }
}
