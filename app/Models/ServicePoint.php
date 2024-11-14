<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePoint extends Model
{
    protected $fillable = ['queue_id', 'name', 'status'];
    public function queue()
    {
        return $this->belongsTo(Queue::class);
    }
}
