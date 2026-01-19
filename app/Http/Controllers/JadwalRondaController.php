<?php

namespace App\Http\Controllers;

use App\Models\JadwalRonda;
use Illuminate\Http\Request;

class JadwalRondaController extends Controller
{
    public function index()
    {
        $data = JadwalRonda::latest()->get();
        return view('jadwal_ronda.index', compact('data'));
    }

    public function create()
    {
        return view('jadwal_ronda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required',
            'tanggal' => 'required|date',
            'rt' => 'required',
            'petugas' => 'required'
        ]);

        JadwalRonda::create($request->all());
        return redirect()->route('jadwal-ronda.index')
            ->with('success','Jadwal berhasil ditambahkan');
    }

    public function edit(JadwalRonda $jadwal_ronda)
    {
        return view('jadwal_ronda.edit', ['item' => $jadwal_ronda]);
    }

    public function update(Request $request, JadwalRonda $jadwal_ronda)
    {
        $jadwal_ronda->update($request->all());
        return redirect()->route('jadwal-ronda.index')
            ->with('success','Jadwal diperbarui');
    }

    public function destroy(JadwalRonda $jadwal_ronda)
    {
        $jadwal_ronda->delete();
        return back()->with('success','Jadwal dihapus');
    }
}
