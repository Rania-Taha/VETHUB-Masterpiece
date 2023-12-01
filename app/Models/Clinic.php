<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $table="clinics";

    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'location',
        'description',
        'about',
        'location_map',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    public function user()
{
    return $this->belongsTo(User::class, 'clinic_id', 'id');
}

    public function working_hours()
    {
        return $this->hasMany(Working_hours::class);
    }
    public function clinic_vet()
    {
        return $this->hasMany(Clinic_vet::class);
    }
    public function clinic_Service()
    {
        return $this->hasMany(Clinic_Service::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }
    public function  schedule()
    {
        return $this->hasMany( Schedule::class);
    }
    



   
}
