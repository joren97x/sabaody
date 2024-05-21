<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Review;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReviewController extends Controller
{
    //
    public function store(Room $room, Request $request) {
        $is_booked = Booking::where('room_number', $room->room_number)->where('code', $request->code)->first();
        $data = $request->validate([
            'code' => ['required', Rule::exists('bookings', 'code')],
            'name' => 'required',
            'review' => 'required',
            'status' => 'required'
        ]);

        if($is_booked) {
            $room = Booking::where('code', $data['code'])->first();
        }
        else {
            return back()->withErrors(['error' => 'Error']);
        }
        $data['room_number'] = $room->room_number;
        if($is_booked->code_used == false) {
            // dd("go");
            Review::create($data);
            $is_booked->code_used = true;
            $is_booked->update();
        }
        else {
            return back()->withErrors(['error' => 'Error']);
        }
        return back();

    }
}
