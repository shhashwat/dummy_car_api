<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehichleDetails extends Model
{
    /** @use HasFactory<\Database\Factories\VehichleDetailsFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class, 'app_id', 'app_id');
    }
}
