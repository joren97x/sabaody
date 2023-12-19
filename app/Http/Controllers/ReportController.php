<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Report;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReportController extends Controller
{
    //
    public function store(Request $request) {
        $data = $request->validate([
            'code' => ['required', Rule::exists('bookings', 'code')],
            'description' => 'required',
            'item' => 'required',
        ]);

        $r = Booking::where('code', $data['code'])->select('room_number')->first();
        $data['room_number'] = $r->room_number;
        $data['status'] = 'pending';
        Report::create($data);
        return back()->with(['success' => 'Reported successfully!']);

    }

    public function fix(Report $report) {
        $report->status = 'fixing';
        $report->update();
        $room = Room::where('room_number', $report->room_number)->first();
        $room->status = false;
        $room->update();

        return back();
    }
    public function destroy(Report $report) {
        $room = Room::where('room_number', $report->room_number)->first();
        $room->status = true;
        $room->update();
        $report->delete();
        return back();
    }
}
