<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic_vet extends Model
{
    protected $table="clinic_vets";

    use HasFactory;


    protected $fillable = [
        'name',
        'image',
        'position',
        'clinic_id',
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}
