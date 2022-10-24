<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
  protected $table ='tbl_product';
  protected $primaryKey='product_id';
  protected $allowedFields=['product_name','product_description','product_image','product_price','available_quantity','subcategory','created_at','updated_at','is_deleted'];
  


  }


  


