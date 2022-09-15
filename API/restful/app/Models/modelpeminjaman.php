<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class modelpeminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'id_peminjaman';
    protected $allowedFields = ['barang_dipinjam','jumlah_barang', 'tanggal_pinjam', 'status_peminjaman'];
}