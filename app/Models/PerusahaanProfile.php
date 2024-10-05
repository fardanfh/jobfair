<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerusahaanProfile extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'perusahaan_profile';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'id_user',
        'profile_image',
        'nama_perusahaan',
        'bio',
        'alamat',
        'notelp',
    ];

    // Define any relationships here (if needed)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
