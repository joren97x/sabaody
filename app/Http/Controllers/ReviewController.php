<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReviewController extends Controller
{
    //
    public function store(Request $request) {
        $data = $request->validate([
            'code' => ['required', Rule::exists('bookings', 'code')],
            'name' => 'required',
            'review' => 'required',
            'status' => 'required'
        ]);

        $room = Booking::where('code', $data['code'])->first();
        $data['room_number'] = $room->room_number;
        Review::create($data);
        return back();

    }
}
