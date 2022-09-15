<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class modelbarangmasuk extends Model
{
    protected $table = 'masuk';
    protected $primaryKey = 'barang_masuk';
    protected $allowedFields = ['nm_barang','spesifikasi', 'kategori', 'satuan', 'tanggal_masuk'];
}