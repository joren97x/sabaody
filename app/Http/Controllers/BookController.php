<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function store(Request $request) {
        dd($request);
        $data = $request->validate([
            'name' => 'required',
            'room_number' => 'required',
            'email' => ['required', 'unique:bookings'],
            'check-in' => 'required',
            'check-out' => 'required'
        ]);
        dd($data);
    }
}
