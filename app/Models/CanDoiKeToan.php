<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CanDoiKeToan extends Model
{
    use HasFactory;

    protected $fillable = [
        'Ticker',
        'Year',
        'Quarter',
        'A1',
        'A2'
    ];
}
