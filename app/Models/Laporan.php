<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'alamat_lengkap',
        'kecamatan',
        'kelurahan',
        'kategori',
        'detail',
        'url_bukti',
        'user_id',
        'status',
    ];

    /**
     * Relationship: Satu laporan memiliki banyak riwayat
     */
    public function riwayats()
    {
        return $this->hasMany(RiwayatLaporan::class, 'id_laporan', 'id');
    }

    /**
     * Relationship: Laporan dimiliki oleh satu user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get latest riwayat
     */
    public function latestRiwayat()
    {
        return $this->hasOne(RiwayatLaporan::class, 'id_laporan', 'id')->latest('tanggal');
    }

    /**
     * Get display name (user name or Anonim)
     */
    public function getDisplayNameAttribute()
    {
        return $this->user->name ?? 'ANONIM';
    }

    /**
     * Get location display
     */
    public function getLocationDisplayAttribute()
    {
        return $this->kelurahan . ', ' . $this->kecamatan;
    }
}
