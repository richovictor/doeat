<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'nama', 'phone', 'email', 'password',
    ];
    protected $primaryKey = "email";
    protected $hidden = [
        'password', 'remember_token', 'created_at', 'updated_at'
    ];
    public $incrementing = false;
}
