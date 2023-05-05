<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenjualan extends Model
{
    use HasFactory;
    public $table = "data_penjualan";

    protected $fillable = [
        'tanggal',
        'no_faktur',
        'keterangan',
        'noref',
        'syarat_pembayaran',
        'piutang_dagang',
        'penjualan',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
