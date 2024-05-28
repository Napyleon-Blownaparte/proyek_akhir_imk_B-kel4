<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Room;

class HotelController extends Controller
{
    public function index(Request $request) {
        $query = Hotel::query();

        if ($request->has('cari')) {
            $cari = $request->input('cari');
            $query->where('hotel_city', 'LIKE', "%$cari%");
        }

        if ($request->has('min_price') && $request->has('max_price')) {
            $minPrice = $request->input('min_price');
            $maxPrice = $request->input('max_price');
            $query->whereBetween('hotel_start_price', [$minPrice, $maxPrice]);
        }

        if ($request->has('stars')) {
            $stars = $request->input('stars');
            $query->whereIn('hotel_star', $stars);
        }

        if ($request->has('accommodation_type')) {
            $accommodationTypes = $request->input('accommodation_type');
            $query->whereIn('hotel_category', $accommodationTypes);
        }

        if ($request->has('sort_by')) {
            $sortBy = $request->input('sort_by');
            switch ($sortBy) {
                case 'price':
                    $query->orderBy('hotel_start_price', 'asc');
                    break;
                case 'rating':
                    $query->orderBy('hotel_rating', 'desc');
                    break;
                case 'stars':
                    $query->orderBy('hotel_star', 'desc');
                    break;
                default:
                    // Default sorting can be added here if needed
                    break;
            }
        }

        $hotels = $query->paginate(5);

        return view('hotel.index', ['hotels' => $hotels]);
    }



    public function show(Hotel $hotel) {
        return view('hotel.show', ['hotel' => $hotel]);
    }
}
