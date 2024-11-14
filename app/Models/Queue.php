<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    protected $fillable = ['name', 'location', 'average_wait_time'];
    public function positions()
    {
        return $this->hasMany(QueuePosition::class);
    }
}
