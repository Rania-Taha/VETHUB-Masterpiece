<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table="schedules";

    use HasFactory;
    protected $fillable = [
        'time',
        'status',
        'clinic_id',
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
    
    public function  booking()
    {
        return $this->hasMany( Booking::class);
    }
}
