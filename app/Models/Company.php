<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function jurnalumums()
    {
        return $this->hasMany(JurnalUmum::class);
    }
    public function pemasukankas()
    {
        return $this->hasMany(PemasukanKas::class);
    }
    public function pengeluarankas()
    {
        return $this->hasMany(PengeluaranKas::class);
    }
    public function pembelians()
    {
        return $this->hasMany(DataPembelian::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
