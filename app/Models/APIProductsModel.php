<?php 
namespace App\Models;

use CodeIgniter\Model;

class APIProductsModel extends Model{
  protected $table = 'tbl_apiproducts';
  protected $primaryKey = 'apiproduct_id';
  protected $allowedFields = ['apiproduct_id', 'productname', 'added_by', 'created_at',  'updated_on'];
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];



  protected function beforeInsert(array $data){
    $data['data']['created_at'] = date('Y-m-d H:i:s');
    $data['data']['updated_on'] = date('Y-m-d H:i:s');
    return $data;
  }

}