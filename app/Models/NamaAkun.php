<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaAkun extends Model
{
    use HasFactory;

    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function penyesuaian()
    {
        return $this->hasOne(Penyesuaian::class);
    }
    public function saldoakun()
    {
        return $this->hasOne(SaldoAkun::class);
    }
    public function detailakun()
    {
        return $this->hasOne(DetailAkun::class);
    }
}
