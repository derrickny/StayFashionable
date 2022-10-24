<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
  protected $table ='tbl_orderdetails';
  protected $primaryKey='orderdetails_id';
  protected $allowedFields=['product_id','product_price','order_quantity','size','orderdetails_total','created_at','updated_at'];
  }
