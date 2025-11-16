<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Saran extends Model
{
    use HasFactory;

    protected $table = 'saran'; 
    protected $primaryKey = 'id_saran'; 

    protected $fillable = [
        'id_pengguna',
        'tanggal',
        'kategori',
        'isi_saran',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_pengguna', 'id');
    }
}