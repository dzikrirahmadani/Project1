<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\modelkategori;
 
class Kategori extends ResourceController
{
    use ResponseTrait;
    // get all product

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $model = new modelkategori();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
 
    // get single product
    public function show($id = null)
    {
        $model = new modelkategori();
        $data = $model->getWhere(['id_kategori' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
    }
 
    // create a product
    public function create()
    {

        $model = new modelkategori();
        $data = [
            'nm_kategori' => $this->request->getVar('nm_kategori'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data kategori berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
 
    // update product
   public function update($id = null)
   {
       $model = new modelkategori();
       $json = $this->request->getJSON();
       if($json){
           $data = [
               'nm_kategori' => $json->nm_kategori
           ];
       }else{
           $input = $this->request->getRawInput();
           $data = [
               'nm_kategori' => $input['nm_kategori'],
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
        $model = new modelkategori();
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