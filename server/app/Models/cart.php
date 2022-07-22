<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    public $timestamps = true;
    protected $primaryKey = 'cart_id';
    protected $fillable = [
        'user_id',
        'ticket_id',
        'payment'
    ];
}
