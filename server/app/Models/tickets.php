<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    public $timestamps = true;
    protected $primaryKey = 'ticket_id';
    protected $fillable = [
        'ticket_name',
        'ticket_price',
        'ticket_price_special',
        'ticket_description',
    ];
}
