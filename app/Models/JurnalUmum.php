<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalUmum extends Model
{
    use HasFactory;
    public $table = "jurnal_umum";

    protected $fillable = [
        'tanggal',
        'bukti_pembayaran',
        'user_id',
    ];
    protected $casts = [
        'tanggal' => 'datetime',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function datas()
    {
        return $this->hasMany(DataJurnalUmum::class);
    }
}
