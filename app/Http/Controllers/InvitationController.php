<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
// PENTING: Import Model yang dibutuhkan
use App\Models\Guest;
use App\Models\Wish;
use App\Models\Rsvp;
use App\Models\SiteSetting;

class InvitationController extends Controller
{
    public function index(Request $request)
    {
$guestName = $request->query('to', 'Tamu Undangan');

    // HANYA AMBIL YANG TIDAKDI-HIDDEN (is_hidden = 0)
    $wishes = Wish::where('is_hidden', false)->latest()->get();

    $setting = SiteSetting::first();

    return view('invitation', [
        'guest' => (object)['name' => $guestName],
        'wishes' => $wishes,
        'setting' => $setting
    ]);
    }

   public function storeWish(Request $request)
    {
        // Validasi input
        $request->validate([
            'sender_name_wish' => 'required',
            'message_wish' => 'required',
        ]);

        // Simpan ke database
        Wish::create([
            'sender_name' => $request->sender_name_wish,
            'message' => $request->message_wish
        ]);

        return back()->with('success_wish', 'Terima kasih atas doa restunya!');
    }

    // PERBAIKAN DI SINI: Nama fungsi diubah jadi 'storeRsvp'
    public function storeRsvp(Request $request)
    {
        $request->validate([
            'name_rsvp' => 'required',
            'status_rsvp' => 'required',
        ]);

        // Simpan atau Update data Tamu di tabel Guests
        // Kita pakai updateOrCreate agar jika tamu sudah ada, datanya diupdate
        Guest::updateOrCreate(
            ['name' => $request->name_rsvp], // Cari berdasarkan nama
            [
                'slug' => Str::slug($request->name_rsvp),
                'status_rsvp' => $request->status_rsvp,
                'attendance_count' => $request->attendance_count ?? 1
            ]
        );

        // OPSIONAL: Jika kamu mau simpan ke tabel Rsvp juga (untuk history)
        Rsvp::create([
            'name_rsvp' => $request->name_rsvp,
           'status_rsvp' => $request->status_rsvp,
           'attendance_count' => $request->attendance_count ?? 1
         ]);

        return back()->with('success_rsvp', 'Konfirmasi kehadiran berhasil dikirim!');
    }
}
