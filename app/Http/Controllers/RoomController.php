<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Room;

class RoomController extends Controller
{
    public function show($hotel_id, $room_id) {
        $hotel = Hotel::findOrFail($hotel_id);
        $room = Room::findOrFail($room_id);
        return view('room.show', ['hotel' => $hotel, 'room' => $room]);
    }

    public function index() {
        return view('room.show');
    }
}
