<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaldoAkun extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    public $table = "saldo_akuns";
    public function namaakun(){
        return $this->belongsTo(NamaAkun::class);
    }
}
