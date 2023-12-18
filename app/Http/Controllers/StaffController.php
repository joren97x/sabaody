<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Report;
use App\Models\Room;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function dashboard() {
        $pending = Booking::where('status', 'pending')->count();
        $reserved = Booking::where('status', 'reserved')->count();
        $checked_out = Booking::where('status', 'checked_out')->count();
        $report = Report::all()->count();
        return view('staff.dashboard', ['pending' => $pending, 'reserved' => $reserved, 'checked_out' => $checked_out, 'report' => $report]);
    }

    public function pending() {
        $reservations = Booking::where('status', 'pending')->get();
        // foreach($reservations as $r) {
        //     $r->room = Room::where('room_number', $r->room_number)->first();
        // }
        return view('staff.pending', ['reservations' => $reservations]);
    }

    public function reserved() {
        $reservations = Booking::where('status', 'reserved')->get();
        return view('staff.reserved', ['reservations' => $reservations]);
    }

    public function check_out() {
        return view('staff.check-out');
    }

    public function view_room() {
        return view('staff.view-rooms');
    }

    public function successful() {
        return view('staff.successful');
    }

    public function declined() {
        $reservations = Booking::where('status', 'declined')->get();
        return view('staff.decline', ['reservations' => $reservations]);
    }

    public function reports() {
        return view('staff.report', ['reports' => Report::all()]);
    }
}
