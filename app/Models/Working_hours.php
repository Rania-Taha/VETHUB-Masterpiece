<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Working_hours extends Model
{
    protected $table="working_hours";

    use HasFactory;
    protected $fillable = [
        'day',
        'start_at',
        'ends_at',
        'clinic_id',
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class , 'clinic_id');
    }
}
