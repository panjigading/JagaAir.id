<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\RiwayatLaporan;
use App\Models\Saran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DasboardController extends Controller
{
    public function dashboard()
    {
        $totalLaporan = Laporan::count(); 

        $latestRiwayatIdQuery = RiwayatLaporan::selectRaw('MAX(id_riwayat)')
            ->groupBy('id_laporan');

        $statusCounts = RiwayatLaporan::query()
            ->whereIn('id_riwayat', $latestRiwayatIdQuery)
            ->select('status', DB::raw('COUNT(*) as total'))
            ->groupBy('status')
            ->pluck('total', 'status');

        $stat = [
            'totalLaporan' => $totalLaporan,
            'menungguVerifikasi' => $statusCounts['menunggu'] ?? 0,
            'diproses' => $statusCounts['diproses'] ?? 0,
            'dikembalikan' => $statusCounts['dikembalikan'] ?? 0,
            'selesai' => $statusCounts['selesai'] ?? 0,
        ];

        $daftar_laporan = Laporan::with('user', 'latestRiwayat')->orderBy('created_at', 'desc')->take(10)->get();

        $daftar_saran = Saran::with('user')->latest()->take(10)->get();

        return view('dashboard', compact(['stat', 'daftar_laporan', 'daftar_saran']));
    }

    public function daftar_laporan()
    {
        $daftar_laporan = Laporan::with('user', 'latestRiwayat')->orderBy('created_at', 'desc')->get();

        return view('daftar_laporan', compact('daftar_laporan'));
    }
}
