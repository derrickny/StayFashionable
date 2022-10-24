<?php
namespace App\Controllers;


use CodeIgniter\Controller;
use App\libraries\Hash;
use App\Models\UserRoles;
use App\Models\UserModel;
use App\Models\CategoryModel;
use App\Models\ProductsModel;
use App\Models\SubcategoryModel;
use App\Models\ItemModel;
use App\Models\APIUserModel;
use App\Models\TokensModel;
use App\Models\APIProductsModel;
use App\Models\OrderModel;
use App\Models\CartModel;

class Cart extends BaseController
{

   public function checkout()
   {
      $id='';
    $userModel= new UserModel();
    $loggeduserID= session()->get('loggeduser');
    $products= new ItemModel();
    $productsDetails =$products->find($id);

    $values =['product_id'=>$id,
               'product_price'=>$productsDetails['product_price'],
                 'order_details'=>$productsDetails['product_price']=$_POST['quantity'],
                 'customer_id'=>$loggeduserID,
                 'order_quantity'=>$_POST['quantity'],
                 'size'=$_POST['size'],
                 'created_at'=>$productsDetails['created_at'],
];

     $data[

             'customer_id'=>$loggeduserID,
             'order_amount'=>$_POST['quantity'],
             'created_at'=>$productsDetails['created_at']


       ];

      $cartmodel= new CartModel();
      $query=$Cartmodel->save($values);
       $ordermodel= new OrderModel();
       $query2=$ordermodel->save($values);
       if(!$query){
       	return redirect()->back->with('fail','something went wrong');
       }
        if(!$query2)
        {
        		return redirect()->back->with('fail','something went wrong');
        }
       else{

       	$last_id =$usermodel->insertID();
       	session()->set('loggeduser',$last_id);
       	return redirect()->to('pages/checkout');
       }
   }

   public function choose()
   {

   }

}