<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class modelkategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['nm_kategori'];
}