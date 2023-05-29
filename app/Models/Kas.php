<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    use HasFactory;
    public function bukubesar(){
        return $this->belongsTo(BukuBesar::class);
    }
}
