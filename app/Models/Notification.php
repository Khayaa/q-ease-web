<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['user_id', 'queue_position_id', 'type', 'sent_at'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function queuePosition()
    {
        return $this->belongsTo(QueuePosition::class);
    }
}
