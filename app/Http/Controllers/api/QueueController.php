<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Queue;

class QueueController extends Controller
{
    public function index(){
        $queues = Queue::all();


        return response()->json($queues);
    }
}
