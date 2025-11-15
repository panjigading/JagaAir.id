<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\RiwayatLaporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Tampilkan halaman cari laporan dengan filter & search
     */
    public function cariLaporan(Request $request)
    {
        $query = Laporan::with('user', 'latestRiwayat')->orderBy('created_at', 'desc');

        // Filter by kecamatan
        if ($request->filled('kecamatan') && $request->kecamatan != '') {
            $query->where('kecamatan', $request->kecamatan);
        }

        // Filter by kelurahan
        if ($request->filled('kelurahan') && $request->kelurahan != '') {
            $query->where('kelurahan', $request->kelurahan);
        }

        // Filter by kategori
        if ($request->filled('kategori') && $request->kategori != '') {
            $query->where('kategori', $request->kategori);
        }

        // Filter by status
        if ($request->filled('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        // Search by alamat atau kelurahan
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('alamat_lengkap', 'like', "%$search%")
                  ->orWhere('kelurahan', 'like', "%$search%")
                  ->orWhere('kecamatan', 'like', "%$search%");
            });
        }

        $laporans = $query->paginate(6);

        // Get unique categories untuk dropdown
        $categories = Laporan::distinct()->pluck('kategori');
        
        // Status options
        $statuses = ['menunggu', 'terverifikasi', 'diproses', 'selesai', 'dikembalikan'];

        return view('cari_laporan', compact('laporans', 'categories', 'statuses'));
    }

    /**
     * Tampilkan halaman riwayat update laporan dengan detail
     */
    public function detailLaporan($id)
    {
        $laporan = Laporan::with('riwayats', 'user')->findOrFail($id);

        // Get latest status from riwayat (to ensure consistency)
        $latestRiwayat = $laporan->riwayats()->orderBy('tanggal', 'desc')->first();
        $currentStatus = $latestRiwayat ? strtoupper($latestRiwayat->status) : strtoupper($laporan->status);

        // Format data untuk view
        $report = [
            'id' => $laporan->id,
            'name' => $laporan->user->name ?? 'ANONIM',
            'date' => $laporan->created_at->format('d M Y'),
            'category' => $laporan->kategori,
            'location' => $laporan->kelurahan . ', ' . $laporan->kecamatan,
            'full_address' => $laporan->alamat_lengkap,
            'photos' => [$laporan->url_bukti],
            'status' => $currentStatus,
            'detail' => $laporan->detail,
            'updates' => $laporan->riwayats()->orderBy('tanggal', 'asc')->get()->map(function($riwayat) {
                return [
                    'id' => $riwayat->id_riwayat,
                    'status' => strtoupper($riwayat->status),
                    'timestamp' => $riwayat->tanggal->format('d M Y, H:i'),
                    'feedback' => $riwayat->tanggapan ?? 'Tidak ada feedback'
                ];
            })->toArray()
        ];

        return view('riwayat_update_laporan', compact('report'));
    }

    /**
     * Update status laporan (untuk admin)
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|in:menunggu,terverifikasi,diproses,selesai,dikembalikan',
            'tanggapan' => 'nullable|string'
        ]);

        $laporan = Laporan::findOrFail($id);

        // Update status laporan utama
        $laporan->update(['status' => $request->status]);

        // Buat riwayat baru
        RiwayatLaporan::create([
            'id_laporan' => $laporan->id,
            'status' => $request->status,
            'tanggapan' => $request->tanggapan,
            'tanggal' => now()
        ]);

        return redirect()->route('detail_laporan', $laporan->id)
                       ->with('success', 'Status laporan berhasil diperbarui');
    }

    /**
     * Get categories untuk AJAX (opsional)
     */
    public function getCategories()
    {
        $categories = Laporan::distinct()->pluck('kategori');
        return response()->json($categories);
    }
}
