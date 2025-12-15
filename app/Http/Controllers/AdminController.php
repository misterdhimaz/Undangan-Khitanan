<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str; // PENTING UNTUK SLUG
use Illuminate\Support\Facades\Session;
// IMPORT SEMUA MODEL DI SINI
use App\Models\Guest;
use App\Models\Wish;
use App\Models\Rsvp;

class AdminController extends Controller
{
    public function loginForm() {
        if (Session::get('is_admin')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function authenticate(Request $request) {
        $username = 'admin';
        $password = 'bismillah123';

        if ($request->username == $username && $request->password == $password) {
            Session::put('is_admin', true);
            return redirect()->route('admin.dashboard');
        }
        return back()->with('error', 'Password salah!');
    }

    public function logout() {
        Session::forget('is_admin');
        return redirect()->route('admin.login');
    }

    public function index() {
        if (!Session::get('is_admin')) {
            return redirect()->route('admin.login');
        }

        $guests = Guest::latest()->get();
        $wishes = Wish::latest()->get();
        $rsvps = Rsvp::latest()->get();

        $stats = [
            'total_tamu' => $guests->count(),
            'hadir' => $rsvps->where('status_rsvp', 'hadir')->count(),
            'tidak_hadir' => $rsvps->where('status_rsvp', 'tidak_hadir')->count(),
            'total_ucapan' => $wishes->count()
        ];

        return view('admin.dashboard', compact('guests', 'wishes', 'stats', 'rsvps'));
    }

    public function storeGuest(Request $request) {
        $request->validate(['name' => 'required']);

        // PENTING: SLUG OTOMATIS
        Guest::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return back()->with('success', 'Tamu berhasil ditambahkan!');
    }

    public function destroyGuest($id) {
        Guest::find($id)->delete();
        return back()->with('success', 'Tamu dihapus.');
    }
}
