<?php 
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Listcategory extends ResourceController
{
	protected $modelName = 'App\Models\CategoryModel';
	protected $format = 'json';

	public function index(){
		$lists = $this->model->findAll();
		return $this->respond($lists);
	}


	
	}