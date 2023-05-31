<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyesuaian extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    public $table = "penyesuaian";
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
