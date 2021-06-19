<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = ['id_kelas','nisn','id_mapel','id_semester','uts'];
    protected $table = 'nilai';
}
