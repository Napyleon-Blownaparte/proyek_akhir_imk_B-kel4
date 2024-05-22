<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Room;

class HotelController extends Controller
{
    public function index() {
        return view('hotel.index');
    }

    public function searchForm()
    {
        return view('home.index');
    }

    public function searchResults(Request $request)
    {
        $request->validate([
            'city' => 'required|string',
            'guests' => 'required|integer',
            'checkin' => 'required|date',
            'checkout' => 'required|date|after:checkin',
        ]);

        $city = $request->input('city');
        $guests = $request->input('guests');
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');

        $hotels = Hotel::where('city', $city)->get();

        // $availableHotels = $hotels->filter(function($hotel) use ($guests, $checkin, $checkout) {
        //     $availableRooms = $hotel->rooms()
        //         ->where('capacity', '>=', $guests)
        //         ->whereDoesntHave('bookings', function($query) use ($checkin, $checkout) {
        //             $query->where(function($q) use ($checkin, $checkout) {
        //                 $q->whereBetween('checkin_date', [$checkin, $checkout])
        //                   ->orWhereBetween('checkout_date', [$checkin, $checkout])
        //                   ->orWhereRaw('? BETWEEN checkin_date AND checkout_date', [$checkin])
        //                   ->orWhereRaw('? BETWEEN checkin_date AND checkout_date', [$checkout]);
        //             });
        //         })->get();

        //     $hotel->available_rooms = $availableRooms;
        //     return $availableRooms->isNotEmpty();
        // });

        return view('hotel.index', ['hotels' => $hotels]);
    }

    public function show() {
        return view('hotel.show');
    }
}
