<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Room;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function store(Request $request) {
        $data = $request->validate([
            'room_number' => 'required',
            'description' => 'required',
            'item' => 'required',
        ]);

        $data['status'] = "pending";

        Report::create($data);
        return back();

    }

    public function fix(Report $report) {
        $report->status = 'fixing';
        $report->update();

        $room = Room::where('room_number', $report->room_number)->first();
        dd($room);

        return back();
    }
    public function destroy(Report $report) {
        $report->delete();
        return back();
    }
}
