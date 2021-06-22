<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $fillable = ['id_mapel', 'id_kelas', 'nisn', 'tanggal', 'pertemuan', 'kehadiran', 'created_at'];
    protected $table = 'absensi';
}
