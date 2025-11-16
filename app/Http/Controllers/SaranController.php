<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaranController extends Controller
{
    public function create()
    {
        return view('form_saran');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'isi_saran' => 'required|string',
        ]);

        $id_pengguna = Auth::check() ? Auth::user()->id : null;

        Saran::create([
            'id_pengguna' => $id_pengguna,
            'tanggal' => now()->toDateString(), 
            'kategori' => $validated['kategori'],
            'isi_saran' => $validated['isi_saran'],
        ]);

        return redirect()->route('form_saran')->with('success', 'Terima kasih atas sarannya!');
    }
}