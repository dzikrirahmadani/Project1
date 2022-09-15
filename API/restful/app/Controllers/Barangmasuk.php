<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\modelbarangmasuk;
 
class Barangmasuk extends ResourceController
{
    use ResponseTrait;
    // get all product

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $model = new modelbarangmasuk();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
 
    // get single product
    public function show($id = null)
    {
        $model = new modelbarangmasuk();
        $data = $model->getWhere(['barang_masuk' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
    }
 
    // create a product
    public function create()
    {
        // $model = new modelbarang();
        // $data = [
        //     'nm_barang' => $this->request->getPost('nm_barang'),
        //     'spesifikasi' => $this->request->getPost('spesifikasi'),
        //     'kategori' => $this->request->getPost('kategori'),
        //     'satuan' => $this->request->getPost('satuan')
        // ];
        // $data = json_decode(file_get_contents("php://input"));
        // //$data = $this->request->getPost();
        // $model->insert($data);
        // $response = [
        //     'status'   => 201,
        //     'error'    => null,
        //     'messages' => [
        //         'success' => 'Data Saved'
        //     ]
        // ];
         
        // return $this->respondCreated($data, 201);

        $model = new modelbarangmasuk();
        $data = [
            'nm_barang' => $this->request->getVar('nm_barang'),
            'spesifikasi'  => $this->request->getVar('spesifikasi'),
            'kategori'  => $this->request->getVar('kategori'),
            'satuan'  => $this->request->getVar('satuan'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data barang masuk berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
 
   // update product
   public function update($id = null)
   {
       $model = new modelbarangmasuk();
       $json = $this->request->getJSON();
       if($json){
           $data = [
               'nm_barang' => $json->nm_barang,
               'spesifikasi' => $json->spesifikasi,
               'kategori' => $json->kategori,
               'satuan' => $json->satuan
           ];
       }else{
           $input = $this->request->getRawInput();
           $data = [
               'nm_barang' => $input['nm_barang'],
               'spesifikasi' => $input['spesifikasi'],
               'kategori' => $input['kategori'],
               'satuan' => $input['satuan'],
           ];
       }
       // Insert to Database
       $model->update($id, $data);
       $response = [
           'status'   => 200,
           'error'    => null,
           'messages' => [
               'success' => 'Data barang berhasil di update'
           ]
       ];
       return $this->respond($response);
   }
 
    // delete product
    public function delete($id = null)
    {
        $model = new modelbarangmasuk();
        $data = $model->find($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data barang berhasil di hapus'
                ]
            ];
             
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
         
    }
 
}