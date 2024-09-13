<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datasiswa extends Model
{
    use HasFactory;
    protected $table = 'datasiswa';
    protected $fillable = [
        'nis', 'nama_leng', 'tempat_lahir', 'tanggal_lahir', 'jenkel', 'nama_ayah', 'nama_ibu', 'agama', 'tlp_ortu', 'alamat', 'password', 'kelas_id'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
