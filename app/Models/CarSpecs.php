<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarSpecs extends Model
{
    /** @use HasFactory<\Database\Factories\CarSpecsFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];
}
