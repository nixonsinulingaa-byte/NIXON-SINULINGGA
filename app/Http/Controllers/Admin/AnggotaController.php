<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggotas = Anggota::latest()->get();
        return view('admin.anggota.index', compact('anggotas'));
    }

    public function create()
    {
        return view('admin.anggota.create');
    }

    public function store(Request $request) // ⬅️ INI WAJIB ADA
    {
        $request->validate([
            'nama'  => 'required|string',
            'rt'    => 'required|string',
            'no_hp' => 'required|string',
        ]);

        Anggota::create([
            'user_id' => auth()->id(), // ⬅️ INI KUNCI
            'nama'    => $request->nama,
            'rt'      => $request->rt,
            'no_hp'   => $request->no_hp,
        ]);

        return redirect()
            ->route('admin.anggota.index')
            ->with('success', 'Anggota berhasil ditambahkan');
    }

    public function edit(Anggota $anggota)
    {
        return view('admin.anggota.edit', compact('anggota'));
    }

    public function update(Request $request, Anggota $anggota)
    {
        $request->validate([
            'nama'  => 'required|string',
            'rt'    => 'required|string',
            'no_hp' => 'required|string',
        ]);

        $anggota->update([
            'nama'  => $request->nama,
            'rt'    => $request->rt,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()
            ->route('admin.anggota.index')
            ->with('success', 'Anggota berhasil diperbarui');
    }

    public function destroy(Anggota $anggota)
    {
        $anggota->delete();

        return back()->with('success', 'Anggota berhasil dihapus');
    }
}
