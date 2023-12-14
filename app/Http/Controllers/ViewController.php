<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function index() {
        return view('user.index');
    }

    public function rooms($category) {
        $rooms = Room::where('category', $category)->get();
        return view('user.rooms', ['rooms' => $rooms]);
        
    }

    public function team() {
        return view('user.team');
    }

    public function book(Room $room) {
        return view('user.book', ['room' => $room]);
    }

    public function report() {
        return view('user.report');
    }
}
