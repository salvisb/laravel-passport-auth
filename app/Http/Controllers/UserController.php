<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(Request $request)
    {
        return Auth::user();
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|string'
        ]);

        Auth::user()->update($validated);

        return Auth::user();
    }
}
