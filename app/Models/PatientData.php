<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class PatientData extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function dentalcase(): BelongsTo
    {
        return $this->belongsTo(Dentalcase::class);
    }

}
