<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataJurnalUmum extends Model
{
    use HasFactory;
    public $table = "data_jurnal_umum";

    protected $fillable = [
        'nama_akun',
        'noref',
        'debit',
        'kredit',
        'jurnal_umum_id',
    ];

    public function jurnalumum()
    {
        return $this->belongsTo(JurnalUmum::class);
    }
}
