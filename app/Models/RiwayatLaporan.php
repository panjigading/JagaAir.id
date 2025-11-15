<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatLaporan extends Model
{
    use HasFactory;

    protected $table = 'riwayat_laporan';
    
    protected $fillable = [
        'id_laporan',
        'tanggapan',
        'status',
    ];
    
    public function laporan()
    {
        return $this->belongsTo(Laporan::class, 'id_laporan', 'id');
    }

}
