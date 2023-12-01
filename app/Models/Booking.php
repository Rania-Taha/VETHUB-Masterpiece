<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table="bookings";

    use HasFactory;
      protected $fillable = [
        'date',
        'time',
        'user_id',
        'schedule_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
    public function clinicName()
    {
        // Assuming you have a schedule relationship and a clinic relationship in the Schedule model
        return $this->schedule->clinic->name;
    }
}



