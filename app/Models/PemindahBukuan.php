<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemindahBukuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor',
        'nama',
        'npwp',
        'tanggal_masuk',
        'petugas',
        'jatuh_tempo',
        'hari_ke',
        'nomor_lap',
        'tanggal_lap',
        'nomor_bukti_pbk',
        'tanggal_bukti_pbk',
    ];

    public function getTanggalMasukDateAttribute()
    {
        return Carbon::parse($this->tanggal_masuk)->isoFormat('D MMMM Y');
    }

    public function getHariKeTransAttribute()
    {
        if ($this->hari_ke == -1) {
            return 'Sudah Selesai';
        } else {
            return 'Belum Selesai';
        }
    }
}
