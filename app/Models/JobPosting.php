<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;

    protected $table = 'job_postings';

    protected $fillable = [
        'id_user',
        'jabatan',
        'deskripsi',
        'tanggung_jawab',
        'keahlian',
        'kualifikasi',
        'pendidikan',
        'pengalaman',
        'level_posisi',
        'tipe_pekerjaan',
        'gaji',
        'lokasi',
        'waktu_bekerja',
        'is_tunjangan',
        'tunjangan',
        'insentif',
        'is_remote',
        'pertanyaan_kandidat',
        'status',
        'tanggal_berakhir',
    ];

    // Cast JSON fields to array
    protected $casts = [
        'pendidikan' => 'array',
        'pengalaman' => 'array',
        'pertanyaan_kandidat' => 'array',
    ];
}
