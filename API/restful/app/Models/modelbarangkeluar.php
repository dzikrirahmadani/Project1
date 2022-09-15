<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class modelbarangkeluar extends Model
{
    protected $table = 'keluar';
    protected $primaryKey = 'barang_keluar';
    protected $allowedFields = ['nm_barang','jumlah_barang', 'kategori', 'satuan', 'tanggal_keluar'];
}