<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = ['id_mapel','id_kelas','hari','jam_mulai','jam_akhir','created_at','updated_at'];
    protected $table = 'jadwal_mapel';
}
