<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class KotakSaranController extends Controller
{
    public function index()
    {
        $daftar_saran = Saran::with('user')->latest()->get();
        
        return view('kotak_saran', compact('daftar_saran'));
    }

    public function show(int $id) {
        $saran = Saran::findOrFail($id);

        return view('detail_saran', compact('saran'));
    }

    public function destroy(int $id) {
        $saran = Saran::findOrFail($id);
        $saran->delete();

        return redirect()->route('admin.kotak_saran.index')
            ->with('success', 'Saran berhasil dihapus.');
    }
}
