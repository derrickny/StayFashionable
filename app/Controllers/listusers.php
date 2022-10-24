<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ItemsModel;
use App\Models\OrderModel;
use App\Models\CartModel;

use CodeIgniter\RESTful\ResourceController;

class Listusers extends ResourceController
{
    // protected $modelName = 'App\Models\UserModel';
    protected $format = 'json';

    public function users()
    {
        $usersModel = new UserModel();
        $users = $usersModel->findAll();
        return $this->respond($users);
    }

    public function usersByGender($gender)
    {
    	
        $usersModel = new UserModel();
        $users = $usersModel->where('gender', $gender)->find();
        return $this->respond($users);
    }
    public function usersById($user_id)
    {
        $usersModel = new UserModel();
        $users = $usersModel->where('user_id', $user_id)->findAll();
        return $this->respond($users);
    }
    public function usersByEmail($email)
    {
        $usersModel = new UserModel();
        $users = $usersModel->where('email', $email)->findAll();
        return $this->respond($users);
    }
    public function transaction()
    {
    	$ordermodel=new OrderModel();
    	$orders=$ordermodel->findAll();
    	return $this->respond($orders);
    }
    public function transactionDetails()
    {
    	$ordersmodel= new CartModel();
    	$order=$ordersmodel->findAll();
    	return $this->respond($order);
    }    
   








	}