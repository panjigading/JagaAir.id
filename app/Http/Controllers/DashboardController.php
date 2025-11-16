<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Saran;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Show dashboard with latest reports and suggestions
     */
    public function index()
    {
        // 5 latest laporan by created_at
        $laporans = Laporan::with('user', 'latestRiwayat')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        // 5 latest saran by tanggal
        $saran = Saran::with('user')
            ->orderBy('tanggal', 'desc')
            ->limit(5)
            ->get();

        return view('dashboard', compact('laporans', 'saran'));
    }

    /**
     * Show daftar laporan with filters
     */
    public function daftarLaporan(Request $request)
    {
        $query = Laporan::with('user', 'latestRiwayat');

        // Filter by kecamatan
        if ($request->filled('kecamatan')) {
            $query->where('kecamatan', $request->kecamatan);
        }

        // Filter by kelurahan
        if ($request->filled('kelurahan')) {
            $query->where('kelurahan', $request->kelurahan);
        }

        // Filter by kategori
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by date range (format: d/m/Y to d/m/Y)
        if ($request->filled('tanggal_filter')) {
            $dateRange = trim($request->tanggal_filter);
            if (!empty($dateRange)) {
                try {
                    // If it contains "to" separator
                    if (strpos($dateRange, ' to ') !== false) {
                        list($startDateStr, $endDateStr) = explode(' to ', $dateRange);
                        $startDate = Carbon::createFromFormat('m/d/Y', trim($startDateStr))->startOfDay();
                        $endDate = Carbon::createFromFormat('m/d/Y', trim($endDateStr))->endOfDay();
                        $query->whereBetween('created_at', [$startDate, $endDate]);
                    }
                } catch (\Exception $e) {
                    // Skip if date parsing fails
                }
            }
        }

        $laporans = $query->orderBy('created_at', 'desc')->get();

        // Get unique data for filters
        $kecamatan = Laporan::distinct('kecamatan')->pluck('kecamatan');
        $kelurahan = Laporan::distinct('kelurahan')->pluck('kelurahan');
        $kategori = Laporan::distinct('kategori')->pluck('kategori');
        $statuses = Laporan::distinct('status')->pluck('status');

        return view('daftar_laporan', compact('laporans', 'kecamatan', 'kelurahan', 'kategori', 'statuses'));
    }
}
