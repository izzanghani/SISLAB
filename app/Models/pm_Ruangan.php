<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pm_ruangan extends Model
{
    use HasFactory;
    protected $filLable = ['id', 'penanggungjawab','instansi','jenis_kegiatan','id_ruangan','tanggal_peminjaman','documentasi','keterangan'];
    public $timestamps = true;
    public function pm_Ruangan()
{
    return $this->hasMany(pm_ruangan::class, 'id_ruangan');
}
 public function deleteImage(){
        if($this->documentasi&& file_exists(public_path('images/pm_ruangan'.$this->documentasi))){
            return unlink(public_path('images/pm_ruangan'.$this->documentasi));
        }
    }

}
