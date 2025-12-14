<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Wish;

class InvitationController extends Controller
{
    public function index(Request $request)
    {
        // Ambil nama tamu dari parameter URL ?to=Nama
        $guestName = $request->query('to', 'Tamu Undangan');

        // Ambil semua ucapan
        $wishes = Wish::latest()->get();

        return view('invitation', [
            'guest' => (object)['name' => $guestName], // Mock object biar gak error
            'wishes' => $wishes
        ]);
    }

    public function storeRsvp(Request $request)
    {
        $request->validate([
            'name_rsvp' => 'required',
            'status_rsvp' => 'required',
        ]);

        // Simpan logika RSVP (Sederhana: update atau create baru)
        Guest::updateOrCreate(
            ['name' => $request->name_rsvp],
            [
                'slug' => \Str::slug($request->name_rsvp),
                'status_rsvp' => $request->status_rsvp,
                'attendance_count' => $request->attendance_count ?? 1
            ]
        );

        return back()->with('success_rsvp', 'Terima kasih, konfirmasi kehadiran berhasil dikirim!');
    }

    public function storeWish(Request $request)
    {
        $request->validate([
            'sender_name_wish' => 'required',
            'message_wish' => 'required',
        ]);

        Wish::create([
            'sender_name' => $request->sender_name_wish,
            'message' => $request->message_wish
        ]);

        return back()->with('success_wish', 'Terima kasih atas doa dan ucapannya!');
    }
}
