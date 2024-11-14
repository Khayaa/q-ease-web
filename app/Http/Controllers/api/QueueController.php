<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Queue;

class QueueController extends Controller
{
    public function index(){
        $queues = Queue::all();


        return response()->json($queues ,200);
    }

    // Get a single queue
    public function show($id)
    {
        $queue = Queue::findOrFail($id);
        return response()->json($queue, 200);
    }

    // Create a new queue
    public function store(Request $request)
    {
        $queue = Queue::create($request->only(['name', 'location', 'average_wait_time']));
        return response()->json($queue, 200);
    }

    // Update an existing queue
    public function update(Request $request, $id)
    {
        $queue = Queue::findOrFail($id);
        $queue->update($request->only(['name', 'location', 'average_wait_time']));
        return response()->json($queue, 200);
    }

    // Delete a queue
    public function destroy($id)
    {
        Queue::destroy($id);
        return response()->json(null, 204);
    }
}
