<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hotel;
use App\Models\Room;

class TransactionSuccessController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function show($hotel_id, $room_id) {
        $hotel = Hotel::findOrFail($hotel_id);
        $room = Room::findOrFail($room_id);
        return view('payment.transaction_success', ['hotel' => $hotel, 'room' => $room]);
    }
}
