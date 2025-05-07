<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Application extends Model
{
    /** @use HasFactory<\Database\Factories\ApplicationFactory> */
    use HasFactory;
    protected $guarded = [];

    public function vehicleDetails(): HasOne
    {
        return $this->hasOne(VehichleDetails::class, 'app_id', 'app_id');
    }

}
