<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'username' => 'required',
            'email' => ['required', 'unique:users'],
            'birthday' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);
        User::create($data);
        return back()->with('message', 'Successfully created new employee');
    }
}
