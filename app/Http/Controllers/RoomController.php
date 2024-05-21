<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function show(\App\Models\Room $room) {
        return view('room.show', [
            'room' => $room
        ]);
    }
}
