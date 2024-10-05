<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDetail extends Model
{
    use HasFactory;

    protected $table = 'job_detail'; // Specify the table name if it's not plural
    protected $fillable = [
        'id_user',
        'id_job',
        'id_status',
        'jawaban_kandidat',
        'catatan',
    ];

    protected $casts = [
        'jawaban_kandidat' => 'array', // Automatically cast JSON to an array
    ];
}
