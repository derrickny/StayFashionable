<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiModel extends Model
{
  protected $table ='api_users';
  protected $primaryKey='user_id';
  protected $allowedFields=['username','password','email','created_at'];
  }
