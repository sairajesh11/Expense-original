<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formBasic extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'empname',
        'phone',
        'expense',
        'amount',
        'currency',
        'empid'
        // 'periodofexp'
    ];
}
