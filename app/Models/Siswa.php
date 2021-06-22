<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nisn','nama','id_kelas','tgl_lahir','jenis_kelamin','no_telp','alamat','foto_profil'];
    protected $table = 'siswa';
}
