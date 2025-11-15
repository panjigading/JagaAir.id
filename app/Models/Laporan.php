<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_pengguna', // Foreign Key
        'url_bukti',
        'alamat_lengkap',
        'detail',
        'kecamatan',
        'kelurahan',
        'kategori',
    ];

    // RELATIONSHIP: A Laporan belongs to one User (Pengguna)
    public function pengguna()
    {
        // Links to the User model using the foreign key 'id_pengguna'
        return $this->belongsTo(User::class, 'user_id');
    }

    public function riwayatLaporans()
    {
        // 'RiwayatLaporan::class' is the related model
        // 'id_laporan' is the foreign key column in the 'riwayat_laporan' table
        return $this->hasMany(RiwayatLaporan::class, 'id_laporan', 'id')->orderBy('created_at', 'desc');
    }
}
