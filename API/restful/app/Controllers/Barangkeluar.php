<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\modelbarangkeluar;
 
class Barangkeluar extends ResourceController
{
    use ResponseTrait;
    // get all product

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $model = new modelbarangkeluar();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
 
    // get single product
    public function show($id = null)
    {
        $model = new modelbarangkeluar();
        $data = $model->getWhere(['barang_keluar' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
    }
 
    // create a product
    public function create()
    {

        $model = new modelbarangkeluar();
        $data = [
            'nm_barang' => $this->request->getVar('nm_barang'),
            'jumlah_barang'  => $this->request->getVar('jumlah_barang'),
            'kategori'  => $this->request->getVar('kategori'),
            'satuan'  => $this->request->getVar('satuan'),
            'tanggal_keluar'  => $this->request->getVar('tanggal_keluar'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data produk berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
 
   // update product
   public function update($id = null)
   {
       $model = new modelbarangkeluar();
       $json = $this->request->getJSON();
       if($json){
           $data = [
               'nm_barang' => $json->nm_barang,
               'jumlah_baQrang' => $json->jumlah_barang,
               'kategori' => $json->kategori,
               'satuan' => $json->satuan,
               'tanggal_keluar' => $json->tanggal_keluar
           ];
       }else{
           $input = $this->request->getRawInput();
           $data = [
               'nm_barang' => $input['nm_barang'],
               'jumlah_barang' => $input['jumlah_barang'],
               'kategori' => $input['kategori'],
               'satuan' => $input['satuan'],
               'tanggal_keluar' => $input['tanggal_keluar'],
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
        $model = new modelbarangkeluar();
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