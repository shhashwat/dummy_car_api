<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominee extends Model
{
    /** @use HasFactory<\Database\Factories\NomineeFactory> */
    public $timestamps = false;
    use HasFactory;
    protected $guarded = [];
}
