<?php 
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ItemModel;

class Listproduct extends ResourceController
{
	protected $format = 'json';


    public function products()
    {
        $itemsModel = new ItemModel();
        $items = $itemsModel->findAll();
        return $this->respond($items);
    }
    public function productById($product_id)
    {
        $itemsModel = new ItemModel();
        $items = $itemsModel->where('product_id', $product_id)->findAll();
        return $this->respond($items);
    }
    public function productByName($product_name)
    {
        $itemsModel = new ItemModel();
        $items = $itemsModel->where('product_name', $product_name)->findAll();
        return $this->respond($items);


	
	}

}