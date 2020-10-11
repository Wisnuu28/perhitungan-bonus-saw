<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hitung extends Model
{
    protected $table = "hitung";
    protected $fillable = ['nama', 'masa_kerja', 'jabatan', 'kedisiplinan', 'kinerja', 'total_nilai'];
}
