<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JurnalPenyesuaian extends Model
{
    use HasFactory;

    protected $table = 'jurnal_penyesuaian';

    protected $fillable = [
        'tanggal',
        'company_id',
        'jenis_transaksi'
    ];

    protected $casts = [
        'tanggal' => 'datetime'
    ];

    public function company(): BelongsTo {
        return $this->belongsTo(Company::class);
    }

    public function datas(): HasMany {
        return $this->hasMany(DataJurnalPenyesuaian::class);
    }
}
