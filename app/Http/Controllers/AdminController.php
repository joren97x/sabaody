<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function view_rooms() {
        return view('admin.view-rooms', ['rooms' => Room::all()]);
    }

    public function view_employees() {
        return view('admin.view-employees', ['employees' => User::all()]);
    }

    public function add_rooms() {
        return view('admin.add-rooms');
    }

    public function add_employees() {
        return view('admin.add-employees');
    }

    public function successful() {
        return view('admin.successful');
    }

    public function declined() {
        return view('admin.declined');
    }

    public function reports() {
        return view('admin.reports');
    }
}
