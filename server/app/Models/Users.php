<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;  
use Illuminate\Notifications\Notifiable;
class Users extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use Notifiable;
    protected $table = 'users';
    public $timestamps = true;
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'email',
        'fullname',
        'password',
        'level'
    ];
    protected function getNameAttribute(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
        );
    }
}
