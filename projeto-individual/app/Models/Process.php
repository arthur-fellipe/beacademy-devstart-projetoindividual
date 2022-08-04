<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

    protected $fillable = [
        'process_number',
        'client',
        'claimant',
        'defendant',
        'court',
        'city',
        'judge',
        'subject',
        'process_value',
        'processed_at',
    ];
}
