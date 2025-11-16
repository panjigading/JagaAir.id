<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Saran;
use Illuminate\Http\Request;

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
}
