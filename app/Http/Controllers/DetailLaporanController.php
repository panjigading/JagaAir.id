<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Mail\TanggapanLaporan;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class DetailLaporanController extends Controller
{

    public function show(int $id)
    {
        $detailLaporan = Laporan::findOrFail($id);
        
        $detailLaporan->load('riwayats');

        return view('detail_laporan', compact('detailLaporan'));

    }

    public function update(Request $request, int $id)

    {
        try {
            $request->validate([
                'status' => ['required', 'string', 'in:Menunggu Verifikasi,Diproses,Selesai,Dikembalikan'],
                'tanggapan' => ['required', 'string', 'max:500'],
            ], [
                'status.in' => 'The status must be one of: Menunggu Verifikasi, Diproses, Selesai, dan Dikembalikan.',
            ]);

            $laporan = Laporan::findOrFail($id);

            $laporan->riwayats()->create([
                'tanggapan' => $request->tanggapan,
                'status' => $request->status,
            ]);

            Mail::to($laporan->user->email)->send(new TanggapanLaporan($laporan));

            return redirect()->route('admin.dashboard')
                             ->with('success', 'Status and response updated successfully.');

        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            Log::error('Failed to update report response: ' . $e->getMessage());
            return back()->with('error', 'An unexpected error occurred during the update process.')->withInput();
        }
    }
}
