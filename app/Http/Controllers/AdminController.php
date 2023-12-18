<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Report;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard() {
        $pending = Booking::where('status', 'pending')->count();
        $reserved = Booking::where('status', 'reserved')->count();
        $checked_out = Booking::where('status', 'checked_out')->count();
        $report = Report::all()->count();
        return view('admin.dashboard', ['pending' => $pending, 'reserved' => $reserved, 'checked_out' => $checked_out, 'report' => $report]);
    }

    public function view_rooms() {
        return view('admin.view-rooms', ['rooms' => Room::all()]);
    }

    public function view_employee(User $employee) {
        return view('admin.view-employees', ['employee' => $employee]);
    }

    public function add_rooms() {
        return view('admin.add-rooms');
    }

    public function add_employees() {
        return view('admin.add-employees', ['employees' => User::all()]);
    }

    public function successful() {
        $reservations = Booking::where('status', 'successful')->get();
        return view('admin.successful', ['reservations' => $reservations]);
    }

    public function declined() {
        $reservations = Booking::where('status', 'declined')->get();
        return view('admin.declined', ['reservations' => $reservations]);
    }

    public function reports() {
        return view('admin.reports', ['reports' => Report::all()]);
    }
}
