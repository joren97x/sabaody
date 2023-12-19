<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    //
    public function index() {
        return view('user.index');
    }

    public function rooms($category) {
        $rooms = Room::where('category', $category)->get();
        foreach($rooms as $r) {
            $r->reviews = Review::where('room_number', $r->room_number)->get();
        }
        return view('user.rooms', ['rooms' => $rooms]);
    }

    public function logout() {
        auth()->logout();
        session()->regenerateToken();
        return redirect('/login');
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

    public function login() {
        return view('admin.login');
    }

    public function login_as_admin() {
        return view('admin.admin-login');
    }
    
    public function login_as_staff() {
        return view('staff.staff-login');
    }

    public function authenticate(Request $request) {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
            'role' => 'required'
        ]);

        if(Auth::attempt($data)) {
            if(auth()->user()->role == 'admin' && $request->role == 'admin') {
                return redirect('/admin/dashboard');
            }
            if(auth()->user()->role == 'staff' && $request->role == 'staff') {
                return redirect('/staff/dashboard');
            }
        }

        return back()->with(['error' => 'Invalid credentials']);

    }

}
