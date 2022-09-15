<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\modelpeminjaman;
 
class Peminjaman extends ResourceController
{
    use ResponseTrait;
    // get all product

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $model = new modelpeminjaman();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
 
    // get single product
    public function show($id = null)
    {
        $model = new modelpeminjaman();
        $data = $model->getWhere(['id_peminjaman' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
    }
 
    // create a product
    public function create()
    {

        $model = new modelpeminjaman();
        $data = [
            'barang_dipinjam' => $this->request->getVar('barang_dipinjam'),
            'jumlah_barang'  => $this->request->getVar('jumlah_barang'),
            'tanggal_pinjam'  => $this->request->getVar('tanggal_pinjam'),
            'status_peminjaman'  => $this->request->getVar('status_peminjaman'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data peminjaman berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
 
    // update product
   public function update($id = null)
   {
       $model = new modelpeminjaman();
       $json = $this->request->getJSON();
       if($json){
           $data = [
               'barang_dipinjam' => $json->barang_dipinjam,
               'jumlah_barang' => $json->jumlah_barang,
               'tanggal_pinjam' => $json->tanggal_pinjam,
               'status_peminjaman' => $json->status_peminjaman
           ];
       }else{
           $input = $this->request->getRawInput();
           $data = [
               'barang_dipinjam' => $input['barang_dipinjam'],
               'jumlah_barang' => $input['jumlah_barang'],
               'tanggal_pinjam' => $input['tanggal_pinjam'],
               'status_peminjaman' => $input['status_peminjaman'],
           ];
       }
       // Insert to Database
       $model->update($id, $data);
       $response = [
           'status'   => 200,
           'error'    => null,
           'messages' => [
               'success' => 'Data Updated'
           ]
       ];
       return $this->respond($response);
   }


    // delete product
    public function delete($id = null)
    {
        $model = new modelpeminjaman();
        $data = $model->find($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Deleted'
                ]
            ];
             
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
         
    }
 
}