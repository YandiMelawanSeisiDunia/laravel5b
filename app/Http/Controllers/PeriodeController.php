<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    // Menampilkan semua data periode
    public function index()
    {
        $periodes = Periode::all();

        return view('periode.index', compact('periodes'));
    }

    // Menampilkan form tambah periode
    public function create()
    {
        return view('periode.create');
    }

    // Menyimpan data periode baru
    public function store(Request $request)
    {
        $request->validate([
            'periode' => 'required|string|max:255',
            'singkatan' => 'required|string|max:10',
        ]);

        Periode::create($request->only([
            'periode',
            'singkatan',
        ]));

        return redirect()->route('periode.index')
            ->with('success', 'Data periode berhasil ditambahkan.');
    }

    // Menampilkan detail periode
    public function show(Periode $periode)
    {
        return view('periode.show', compact('periode'));
    }

    // Menampilkan form edit periode
    public function edit(Periode $periode)
    {
        return view('periode.edit', compact('periode'));
    }

    // Memperbarui data periode
    public function update(Request $request, Periode $periode)
    {
        $request->validate([
            'periode' => 'required|string|max:255',
            'singkatan' => 'required|string|max:10',
        ]);

        $periode->update($request->only([
            'periode',
            'singkatan',
        ]));

        return redirect()->route('periode.index')
            ->with('success', 'Data periode berhasil diperbarui.');
    }

    // Menghapus data periode
    public function destroy(Periode $periode)
    {
        $periode->delete();

        return redirect()->route('periode.index')
            ->with('success', 'Data periode berhasil dihapus.');
    }
}