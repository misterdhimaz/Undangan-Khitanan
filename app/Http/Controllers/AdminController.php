<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage; // <--- WAJIB ADA UNTUK UPLOAD/HAPUS FILE

// IMPORT SEMUA MODEL
use App\Models\Guest;
use App\Models\Wish;
use App\Models\Rsvp;
use App\Models\SiteSetting;

class AdminController extends Controller
{
    // --- AUTHENTICATION ---
    public function loginForm() {
        if (Session::get('is_admin')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function authenticate(Request $request) {
        // Ganti kredensial sesuai keinginan
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

    // --- DASHBOARD (INDEX) ---
    public function index() {
        if (!Session::get('is_admin')) {
            return redirect()->route('admin.login');
        }

        $guests = Guest::latest()->get();
        $wishes = Wish::latest()->get();
        $rsvps = Rsvp::latest()->get();

        // LOGIKA BARU: Ambil Settingan Media agar tidak error di View
        $setting = SiteSetting::first();
        if(!$setting) {
            $setting = SiteSetting::create([]);
        }

        $stats = [
            'total_tamu' => $guests->count(),
            'hadir' => $rsvps->where('status_rsvp', 'hadir')->count(),
            'tidak_hadir' => $rsvps->where('status_rsvp', 'tidak_hadir')->count(),
            'total_ucapan' => $wishes->count()
        ];

        // Kirim $setting ke view bersama data lainnya
        return view('admin.dashboard', compact('guests', 'wishes', 'stats', 'rsvps', 'setting'));
    }

    // --- MANAJEMEN TAMU ---
    public function storeGuest(Request $request) {
        $request->validate(['name' => 'required']);

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

    // --- MANAJEMEN UCAPAN (HIDE/SHOW) ---
    public function toggleWish($id)
    {
        $wish = Wish::find($id);
        // Ubah status kebalikannya
        $wish->is_hidden = !$wish->is_hidden;
        $wish->save();

        return back()->with('success', 'Status ucapan berhasil diubah.');
    }

    // --- MANAJEMEN MEDIA (UPLOAD) ---
   public function updateMedia(Request $request) {
    // Validasi (Supabase kuat, tapi kita batasi biar aman)
    $request->validate([
        'music' => 'nullable|mimes:mp3,wav|max:5000', // 5MB
        'gallery_1' => 'nullable|image|max:5000',
        'gallery_2' => 'nullable|image|max:5000',
        'gallery_3' => 'nullable|image|max:5000',
    ]);

    $setting = SiteSetting::first();
    if(!$setting) $setting = SiteSetting::create([]);

    $fields = ['music' => 'music_path', 'gallery_1' => 'gallery_1', 'gallery_2' => 'gallery_2', 'gallery_3' => 'gallery_3'];

    foreach($fields as $inputName => $dbColumn) {
        if ($request->hasFile($inputName)) {
            // 1. Upload ke Supabase (folder 'uploads' di dalam bucket 'undangan')
            // Parameter kedua 'supabase' adalah nama disk yang kita buat di config/filesystems.php
            $path = $request->file($inputName)->store('uploads', 'supabase');

            // 2. Ambil Full URL Public-nya
            // Hasilnya akan: https://.../storage/v1/object/public/undangan/uploads/namafile.jpg
            $url = Storage::disk('supabase')->url($path);

            // 3. Simpan URL ke Database
            $setting->$dbColumn = $url;
        }
    }

    $setting->save();
    return back()->with('success', 'Media berhasil diupload ke Supabase!');
}
}
