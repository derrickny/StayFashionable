<?php

namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
  protected $table ='tbl_users';
  protected $primaryKey='user_id';
  protected $allowedFields=['firstname','lastname','email','gender','username','password','role','is_deleted'];

  
  



  

}
