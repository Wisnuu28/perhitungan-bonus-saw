<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $fillable = ['nama', 'masa_kerja', 'jabatan', 'kedisiplinan', 'kinerja'];
}
