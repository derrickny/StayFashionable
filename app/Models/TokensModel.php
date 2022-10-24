<?php 
namespace App\Models;

use CodeIgniter\Model;

class TokensModel extends Model{
  protected $table = 'tbl_apitokens';
  protected $primaryKey = 'apitoken_id';
  protected $allowedFields = ['api_userid', 'api_productid', 'api_token', 'created_at',  'expires_on', 'added_by'];
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];



  protected function beforeInsert(array $data){
    $data['data']['created_at'] = date('Y-m-d H:i:s');
    $expire_date = strtotime("+1 Week");
    $data['data']['expires_on'] = date('Y-m-d H:i:s', $expire_date);
    return $data;
  }

}