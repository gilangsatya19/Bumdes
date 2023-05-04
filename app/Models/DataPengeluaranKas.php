<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengeluaranKas extends Model
{
    use HasFactory;
    public $table = "data_pengeluaran_kas";

    protected $fillable = [
        'nama_akun',
        'noref',
        'debit',
        'kredit',
        'pemasukan_kas_id',
    ];
    public function pengeluarankas()
    {
        return $this->belongsTo(PengeluaranKas::class);
    }
}
