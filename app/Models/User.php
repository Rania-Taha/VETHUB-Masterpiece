<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table="users";

    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'password',
        'email_verified_at',
        'role',
        'clinic_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

  
//     public function clinic()
// {
//     return $this->hasOne(Clinic::class);
// }
public function clinic()
{
    return $this->hasOne(Clinic::class, 'id', 'clinic_id');
}
public function review()
{
    return $this->hasMany(Review::class);
}

public function booking()
{
    return $this->hasMany(Booking::class);
}

}