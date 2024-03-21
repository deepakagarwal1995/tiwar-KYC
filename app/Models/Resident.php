<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'resident_id',
        'society',
        'appartment_no',
        'resident_type',
        'role_id',
    ];

    public function society_name()
    {
        return $this->belongsTo(Society::class, 'society');
    }
}
