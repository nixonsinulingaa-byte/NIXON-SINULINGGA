<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalRonda;
use Illuminate\Http\Request;

class JadwalRondaController extends Controller
{
    public function index()
    {
        $jadwal = JadwalRonda::latest()->get();
        return view('admin.jadwal.index', compact('jadwal'));
    }

    public function create()
    {
        return view('admin.jadwal.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'tanggal' => 'required|date',
        'hari' => 'required',
        'rt' => 'required',
        'petugas' => 'required',
    ]);

    JadwalRonda::create([
        'tanggal' => $request->tanggal,
        'hari' => $request->hari,
        'rt' => $request->rt,
        'petugas' => $request->petugas,
    ]);

    return redirect()->route('admin.jadwal.index')
        ->with('success', 'Jadwal ronda berhasil ditambahkan');
}


    public function edit(JadwalRonda $jadwal)
    {
        return view('admin.jadwal.edit', compact('jadwal'));
    }

    public function update(Request $request, JadwalRonda $jadwal)
    {
        $request->validate([
            'hari' => 'required',
            'rt' => 'required',
            'petugas' => 'required',
        ]);

        $jadwal->update($request->all());

        return redirect()->route('admin.jadwal.index')
            ->with('success', 'Jadwal berhasil diperbarui');
    }

    public function destroy(JadwalRonda $jadwal)
    {
        $jadwal->delete();
        return back()->with('success', 'Jadwal berhasil dihapus');
    }
}
