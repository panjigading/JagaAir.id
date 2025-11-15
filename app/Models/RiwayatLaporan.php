<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RiwayatLaporan extends Model
{
    use HasFactory;

    protected $table = 'riwayat_laporan';
    protected $primaryKey = 'id_riwayat';
    public $timestamps = false;

    protected $fillable = [
        'id_laporan',
        'status',
        'tanggapan',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'datetime',
    ];

    /**
     * Relationship: Riwayat dimiliki oleh satu laporan
     */
    public function laporan()
    {
        return $this->belongsTo(Laporan::class, 'id_laporan', 'id');
    }

    /**
     * Get formatted date
     */
    public function getTanggalFormattedAttribute()
    {
        return $this->tanggal->format('d M Y, H:i');
    }
}
