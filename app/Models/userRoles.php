<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRoles extends Model
{
  protected $table ='tbl_roles';
  protected $primaryKey='role_id';
  protected $allowedFields=['role_name'];  
}
