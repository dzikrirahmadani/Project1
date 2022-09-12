<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class modelbarang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['nm_barang','spesifikasi', 'kategori', 'satuan'];
}