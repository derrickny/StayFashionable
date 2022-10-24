<?php 
namespace App\Models;

use CodeIgniter\Model;

class APIUserModel extends Model{
  protected $table = 'tbl_apiuser';
  protected $primaryKey = 'apiuser_id';
  protected $allowedFields = ['username', 'key', 'created_at', 'updated_on', 'added_by'];
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];



  protected function beforeInsert(array $data){
    $data['data']['created_at'] = date('Y-m-d H:i:s');
    return $data;
  }

  protected function beforeUpdate(array $data){
    $data['data']['updated_on'] = date('Y-m-d H:i:s');
    return $data;
  }


}