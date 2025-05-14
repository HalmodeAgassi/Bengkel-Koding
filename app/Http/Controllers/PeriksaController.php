<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;
use App\Models\Obat;

class PeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periksas = Periksa::all();
        return view('dokter.periksa', compact('periksas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $periksa = Periksa::with(['pasien', 'detailPeriksa.obat'])->findOrFail($id);
        return view('dokter.periksaShow', compact('periksa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $periksa = Periksa::findOrFail($id);
        $obats = Obat::all();
        return view('dokter.periksaEdit', compact('periksa', 'obats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tgl_periksa' => 'required|date',
            'catatan' => 'nullable|string',
            'obat' => 'required|array',
            'obat.*' => 'exists:obats,id',
        ]);

        $periksa = Periksa::findOrFail($id);
        $periksa->update([
            'tgl_periksa' => $request->tgl_periksa,
            'catatan' => $request->catatan,
        ]);

        DetailPeriksa::where('id_periksa', $periksa->id)->delete();

        foreach ($request->obat as $obatId) {
            DetailPeriksa::create([
                'id_periksa' => $periksa->id,
                'id_obat' => $obatId,
            ]);
        }

        $totalHargaObat = Obat::whereIn('id', $request->obat)->sum('harga');

        $biayaJasa = 50000; // Biaya jasa dokter
        $totalBiaya = $totalHargaObat + $biayaJasa;

        $periksa->update([
            'biaya_periksa' => $totalBiaya,
        ]);

        return redirect()->route('dokter.periksa.index')->with('success', 'Periksa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $periksa = Periksa::findOrFail($id);
        $periksa->delete();

        return redirect()->route('dokter.periksa.index')->with('success', 'Periksa berhasil dihapus.');
    }
}
