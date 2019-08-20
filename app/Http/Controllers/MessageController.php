<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store()
    {
        $validated = request()->validate([
            'text' => 'required',
            'to' => 'required',
            'from' => 'required'
        ]);

        $message = Message::create($validated);

        return response()->json([
            'message' => $message
        ], 201);
    }
}
