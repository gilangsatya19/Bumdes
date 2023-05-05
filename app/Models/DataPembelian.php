<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPembelian extends Model
{
    use HasFactory;
    public $table = "data_pembelian";

    protected $fillable = [
        'tanggal',
        'keterangan',
        'noref',
        'pembelian',
        'akun',
        'jumlah',
        'utang_dagang',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
