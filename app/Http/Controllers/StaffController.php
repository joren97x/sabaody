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

        $bookings = Booking::where('status', 'checked_in')->orWhere('status', 'successful')->get();
        $monthly_sales = 0;
        foreach($bookings as $b) {
            $r = Room::where('room_number', $b->room_number)->first();
            $monthly_sales += $r->price;
        }
        return view('staff.dashboard', ['monthly_sales' => $monthly_sales ,'pending' => $pending, 'reserved' => $reserved, 'checked_out' => $checked_out, 'report' => $report]);
    }

    public function pending() {
        $reservations = Booking::where('status', 'pending')->get();
        return view('staff.pending', ['reservations' => $reservations]);
    }

    public function reserved() {
        $reservations = Booking::where('status', 'reserved')->get();
        return view('staff.reserved', ['reservations' => $reservations]);
    }

    public function check_out() {
        $reservations = Booking::where('status', 'checked_in')->get();
        return view('staff.check-out', ['reservations' => $reservations]);
    }

    public function view_room($category) {
        if($category == 'all-rooms') {
            return view('staff.view-rooms', ['rooms' => Room::all()]);
        }
        else {
            return view('staff.view-rooms', ['rooms' =>  Room::where('category', $category)->get()]);
        }
    }

    public function successful() {
        $reservations = Booking::where('status', 'successful')->get();
        return view('staff.successful', ['reservations' => $reservations]);
    }

    public function declined() {
        $reservations = Booking::where('status', 'declined')->get();
        return view('staff.decline', ['reservations' => $reservations]);
    }

    public function reports() {
        return view('staff.report', ['reports' => Report::all()]);
    }
}
