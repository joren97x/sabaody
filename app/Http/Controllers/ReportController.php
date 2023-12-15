<?php

namespace App\Http\Controllers;

use App\Models\Report;
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
}
