<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart_detail extends Model
{
    use HasFactory;
    protected $table = 'cart_detail';
    public $timestamps = true;
    protected $primaryKey = 'cart_detail_id';
    protected $fillable = [
        'ticket_id',
        'quantity',
        'price',
        'ticket_date'
    ];
}
