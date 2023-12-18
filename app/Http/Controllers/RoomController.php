<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function store(Request $request) {

        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'occupancy' => 'required',
            'bed_type' => 'required',
            'category' => 'required',
            'price' => 'required',
            'room_number' => 'required',
        ]);
        if(!$request->image) {
            return back();
        }
        $request->image->move(public_path('/images/rooms'), $request->image->getClientOriginalName());
        $data['image'] = $request->image->getClientOriginalName();
        $data['status'] = true;
        Room::create($data);
        return back();
    }
}
