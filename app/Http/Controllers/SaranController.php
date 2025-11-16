<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SaranController extends Controller
{
    public function create()
    {
        return view('form_saran');
    }

    public function store(Request $request)
    {
        $validCategories = [
            'infrastruktur_air',
            'sanitasi',
            'pelayanan_respons',
            'edukasi_sosialisasi',
            'inovasi_ide_baru',
            'sistem_aplikasi',
        ];

        try {
            $validated = $request->validate([
                'nama' => 'string|nullable|max:255',
                'kategori' => 'required|in:' . implode(',', $validCategories),
                'isi_saran' => 'required|string',
            ]);

            $id_pengguna = Auth::check() ? Auth::user()->id : null;

            Saran::create([
                'id_pengguna' => $id_pengguna,
                'tanggal' => now()->toDateString(), 
                'kategori' => $validated['kategori'],
                'isi_saran' => $validated['isi_saran'],
            ]);

            return redirect()->route('form_saran')->with('success', 'Terima kasih atas masukan anda');

        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat memproses saran Anda. Mohon coba lagi.')
                ->withInput();
        }
    }
}