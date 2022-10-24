<?php 
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Listsubcategory extends ResourceController
{
	protected $modelName = 'App\Models\SubcategoryModel';
	protected $format = 'json';

	public function index(){
		$sublists = $this->model->findAll();
		return $this->respond($sublists);
	}


	
	}