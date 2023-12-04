<?php

namespace App\Models;

use App\Mail\HelloMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'subject', 'message',
    ];
    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "rania.taha105@gmail.com";
            Mail::to($adminEmail)->send(new HelloMail($item));
        });
    }
}
