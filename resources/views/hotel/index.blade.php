@extends('layouts.app')

@section('content')
    <h1>Hotel Search Results</h1>
    @if($hotels->isEmpty())
        <p>No hotels found.</p>
    @else
        @foreach($hotels as $hotel)
            <h2>{{ $hotel->name }} - {{ $hotel->city }}</h2>
            <ul>
                @foreach($hotel->available_rooms as $room)
                    <li>Room {{ $room->room_number }} - ${{ $room->price_per_night }} per night</li>
                @endforeach
            </ul>
        @endforeach
    @endif
@endsection
