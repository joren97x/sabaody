<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function approve(Request $request) {
        $reservation = Booking::find($request->reservation);
        $reservation->status = 'reserved';
        $reservation->update();
        return redirect('/staff/reserved');
    }

    public function decline(Request $request) {
        $reservation = Booking::find($request->reservation);
        $reservation->status = 'declined';
        $reservation->update();
        return redirect('/staff/declined');
    }

}
