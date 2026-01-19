<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        // This method is only hit by admins due to route definitions
        $laporans = Laporan::with('user')->latest()->get();

        return view('admin.laporan', compact('laporans'));
    }

    public function create()
    {
        return view('warga.laporan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('laporan', 'public');
        }

        Laporan::create([
            'user_id' => auth()->id(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'foto' => $fotoPath,
            'status' => 'baru', // Status default
        ]);

        return redirect()->route('warga.dashboard')
            ->with('success', 'Laporan berhasil dikirim');
    }

    public function show(Laporan $laporan)
    {
        $user = auth()->user();

        // Warga can only see their own reports
        if ($user->role === 'warga' && $user->id !== $laporan->user_id) {
            abort(403, 'Anda tidak diizinkan melihat laporan ini.');
        }

        // Return the appropriate view based on the user's role
        if ($user->role === 'admin') {
            // Also fetch the user who created the report to display their name
            $pelapor = \App\Models\User::find($laporan->user_id);
            return view('admin.laporan.show', compact('laporan', 'pelapor'));
        }

        return view('warga.laporan.show', compact('laporan'));
    }

    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'status' => 'required|string|in:baru,diproses,selesai',
        ]);

        $laporan->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.laporan.show', $laporan)
            ->with('success', 'Status laporan berhasil diperbarui.');
    }
}