<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengeluaranKas extends Model
{
    use HasFactory;
    public $table = "pengeluaran_kas";

    protected $fillable = [
        'tanggal',
        'user_id'
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
        return $this->hasMany(DataPengeluaranKas::class);
    }
}
