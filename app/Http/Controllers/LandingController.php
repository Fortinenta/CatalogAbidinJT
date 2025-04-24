<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Logic untuk menyimpan atau mengirim pesan (misalnya ke email atau database)
        // Untuk contoh ini, kita hanya redirect dengan pesan sukses
        return redirect()->route('landing')->with('success', 'Message sent successfully!');
    }
}