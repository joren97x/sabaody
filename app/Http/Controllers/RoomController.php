<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
            'occupancy' => 'required',
            'bed_type' => 'required',
            'category' => 'required',
            'price' => 'required',
            'room_number' => 'required',
        ]);
        Room::create($data);
        return back();
    }
}
