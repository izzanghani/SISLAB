<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_barang','id_merk','id_ruangan','id_kondisi','posisi','spek'];
    public $timestamps = true;

    public function merk()
    {
        return $this->belongsTo(Merk::class, 'id_merk');
    }
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'id_ruangan');
    }
    public function kondisi()
    {
        return $this->belongsTo(Kondisi::class, 'id_kondisi');
    }

    public function m_Barang()
    {
        return $this->hasMany(m_arang::class, 'id_barang');
    }
}
