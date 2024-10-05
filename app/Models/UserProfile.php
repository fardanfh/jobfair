<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    // Specify the table name if it does not follow Laravel's naming convention
    protected $table = 'user_profiles';

    // Specify the fillable attributes for mass assignment
    protected $fillable = [
        'id_user',
        'profile_image',
        'bio',
        'cv',
        'sertifikat',
    ];

    // Define a relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user'); // Adjust the User model namespace if necessary
    }
}
