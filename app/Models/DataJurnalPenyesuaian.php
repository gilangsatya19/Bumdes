<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataJurnalPenyesuaian extends Model
{
    use HasFactory;
    use HasFormatRupiah;

    protected $table = 'data_jurnal_penyesuaian';

    protected $fillable = [
        'nama_akun',
        'noref',
        'debit',
        'kredit',
        'jurnal_umum_id',
    ];

    public function jurnalPenyesuaian(): BelongsTo
    {
        return $this->belongsTo(JurnalPenyesuaian::class);
    }

}
