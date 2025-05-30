<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Teacher extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'subject', 'available_time', 'price', 'class_type'];

    protected $hidden = ['password'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}