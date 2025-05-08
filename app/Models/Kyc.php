<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    /** @use HasFactory<\Database\Factories\KycFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];
}
