<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function patients(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }



    public function dentalcases(): BelongsTo
    {
        return $this->belongsTo(Dentalcase::class);
    }



    public function doctors(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

}
