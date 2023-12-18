<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'room_number' => 'required',
            'email' => ['required', 'unique:bookings'],
            'check_in' => 'required',
            'check_out' => 'required'
        ]);
        $bookings = Booking::where('room_number', $request->room_number)->get();
        
        $requestedCheckIn = $request->input('check_in');
        $requestedCheckOut = $request->input('check_out');

        foreach ($bookings as $booking) {
            $existingCheckIn = $booking->check_in; // Convert to date only
            $existingCheckOut = $booking->check_out;

            // Check for date overlap
            if (
                ($requestedCheckIn >= $existingCheckIn && $requestedCheckIn < $existingCheckOut) ||
                ($requestedCheckOut > $existingCheckIn && $requestedCheckOut <= $existingCheckOut) ||
                ($requestedCheckIn <= $existingCheckIn && $requestedCheckOut >= $existingCheckOut)
            ) {
                // There is an overlap, handle accordingly (e.g., return an error response)
                return back()->with(['errorCheckin' => 'The selected date range overlaps with an existing booking.']);
            }
        }
        $data['status'] = 'pending';
        Booking::create($data);
        return back();
        
    }
}
