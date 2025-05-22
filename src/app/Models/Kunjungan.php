<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kunjungan extends Model
{
    protected $table = 'kunjungans';
    protected $fillable = [
        'hari',
        'keluhan',
    ];

    public function pasien(): HasMany {
        return $this->hasMany(Pasien::class);
    }
}