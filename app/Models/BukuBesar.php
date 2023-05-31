<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuBesar extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    public $table = "buku_besar";
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
