<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic_Service extends Model
{
    protected $table="clinic_services";

    use HasFactory;
    protected $fillable = [
        'service_name',
        'image',
        'description',
        'clinic_id',
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}
