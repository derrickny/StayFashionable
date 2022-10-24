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

class Auth extends BaseController
{ 
 public function processregister()
    {
       $validation=$this->validate([
        'firstname'=>'required',
        'lastname'=>'required',
        'email'=>'required|valid_email|is_unique[tbl_users.email]',
        'gender'=>'required',
        'username'=>'required',
        'password'=>'required|min_length[5]|max_length[12]',
        'role' => 'required',


]); 
       if(!$validation){
        return view('auth/register.php',['validation'=>$this->validator]);
       }
       else{

       //stores in db 
        $firstname=$this->request->getPost('firstname');
        $lastname=$this->request->getPost('lastname');
        $email=$this->request->getPost('email');
        $gender=$this->request->getpost('gender');
        $username=$this->request->getPost('username');
        $password=$this->request->getPost('password');
        $role =$this->request->getPost('role');

        $values=[

              'firstname'=>$firstname,
              'lastname'=>$lastname,
              'email'=>$email,
              'gender'=>$gender,
              'username'=>$username,
              'password'=>Hash::make($password),
              'role'=>$role,
        ];

        $usermodel= new \App\Models\userModel();
        $query =$usermodel->insert($values);
        if(!$query){
            return redirect()->back()->with('fail','something is wrong');
        }else{
            return redirect()->to('Pages/login')->with('sucess','You are registered');
        }

       }



    }

    public function processlogin(){

    if($this->request->getMethod() == 'post'){
            $user_model = new UserModel();
            $username = $this->request->getvar('username');
            $password = $this->request->getvar('password');
            
            $user = $user_model->where('username', $username)->first();
            $role_id = $user['role'];
            // dd($user);
            $roles_model = new UserRoles();
            $role = $roles_model->where('role_id', $role_id)->first();
            $role_name = $role['role_name'];

            $isCorrectPassword = Hash::check($password,$user['password']);

            if($isCorrectPassword == true){
                $session = session();
                $session->setFlashdata('success', 'Successful Login');

                $session->set('role', $role_name);

                if($role_name == "User"){
                    return redirect()->to('Pages/index');
                }

                if($role_name == "Admin"){
                    return redirect()->to('Pages/admin');
                }

                if($role_name == "API User"){
                    return redirect()->to('Pages/apiuser');
                }

                
            }
            else{
                $session = session();
                $session->setFlashdata('error', 'Wrong Credentials!');
                return redirect()->to('Pages/login');

            }

        }
    }

    public function processcategory()
    {
       $validation=$this->validate([
        
        'category'=>'required',


]); 
       if(!$validation){
        return view('pages/addcategory',['validation'=>$this->validator]);
       }
       else{

       //stores in db 
        $category=$this->request->getPost('category');
        $values=[

              'category_name'=>$category,
        ];

    
        $categorymodel = new \App\Models\CategoryModel();
        $query =$categorymodel->insert($values);
        if(!$query){
            return redirect()->back()->with('fail','something went wrong');
        }else{
            return redirect()->to('pages/categoryshow')->with('sucess','category added');
        }

       }
   }


    
     public function processsubcategory()
    {
       $validation=$this->validate([
        
        'subcategory'=>'required',


]); 
       if(!$validation){
        return view('pages/addsubcategory',['validation'=>$this->validator]);
       }
       else{

       //stores in db 
        $subcategory=$this->request->getPost('subcategory');
        $values=[

              'subcategory_name'=>$subcategory,
        ];

    
        $subcategorymodel = new \App\Models\SubcategoryModel();
        $query =$subcategorymodel->insert($values);
        if(!$query){
            return redirect()->back()->with('fail','something went wrong');
        }else{
            return redirect()->to('Pages/subcategoryshow')->with('success','subcategory added');
        }

       }



    }


   

     public function user_edit($user_id)
    {
        $user_model=new \App\Models\userModel();
        $user = $user_model->where('user_id', $user_id)->first();

     $validation=$this->validate([
        'firstname'=>'required',
        'lastname'=>'required',
        'email'=>'required|valid_email|is_unique[tbl_users.email]',
        'username'=>'required',
        'gender'=>'required',
        'password'=>'required|min_length[5]|max_length[12]',
        'role' => 'required',


]); 
       if(!$validation){
        return view('auth/users_edit.php',['validation'=>$this->validator]);
       }
       else{
        $usermodel= new \App\Models\userModel();

      //stores in db 
        $firstname=$this->request->getPost('firstname');
        $lastname=$this->request->getPost('lastname');
        $email=$this->request->getPost('email');
        $gender=$this->request->getPost('gender');
        $username=$this->request->getPost('username');
        $password=$this->request->getPost('password');
        $role =$this->request->getPost('role');

        $values=[
                'user_id'=>$user_id,
              'firstname'=>$firstname,
              'lastname'=>$lastname,
              'email'=>$email,
              'gender'=>$gender,
              'username'=>$username,
              'password'=>Hash::make($password),
              'role'=>$role,
        ];

    $usermodel->save($values);
    session()->setFlashdata('User Successfully updated');
    return redirect()->to("pages/listusers");

       }



    }

    public function user_delete($user_id){
            $user_model = new UserModel();
            $user_model->delete($user_id);
            $session = session();
            $session->setFlashdata('success', 'User Deleted');
            return redirect()->to("pages/listusers");

}

    public function processitem()
    {
    
   $validation=$this->validate([
         'name'=>'required',


]); 
       if(!$validation){
            return view('admin/items/items_add.php',['validation'=>$this->validator]);
       }
       else{

       //stores in db 
        $name=$this->request->getPost('name');
        $description=$this->request->getPost('description');
        $image=$this->request->getPost('image');
        $price=$this->request->getPost('price');
        $quantity=$this->request->getPost('quantity');
        $subcategory =$this->request->getPost('subcategory');
        $createdat=$this->request->getPost('createdat');

        $values=[

              'product_name'=>$name,
              'product_description'=>$description,
              'product_image'=>$image,
              'product_price'=>$price,
              'available_quantity'=>$quantity,
              'subcategory'=>$subcategory,
              'created_at'=>$createdat,
        ];
        

        $itemmodel= new \App\Models\ItemModel();
        $query =$itemmodel->insert($values);
        if(!$query){
            return redirect()->back()->with('fail','something is wrong');
        }else{
            return redirect()->to('Pages/itemshow')->with('sucess','You Successfully added an item');
        }

       }

      } 

      public function logout(){
        session()->destroy();
        return redirect()->to('Pages/login');
    }
     public function item_delete($product_id){
            $item_model = new ItemModel();
            $item_model->delete($product_id);
            $session = session();
            $session->setFlashdata('success', 'item Deleted');
            return redirect()->to("pages/itemshow");
  }
  public function processapi(){
            $data = [];
            helper(['form']);
    
            if ($this->request->getMethod() == 'post'){
                $rules = [
                    'username' => 'required|min_length[3]|max_length[20]',
    
                ];

                $session = session();

    
                if (! $this->validate($rules)){
                    $data['validation'] = $this->validator;
                }
                else{
                    $model = new APIUserModel();
                
    
                    $values = [
                        'username' => $this->request->getPost('username'),
                        'key' => uniqid(),
                        'added_by' => $session->get('role'),
    
                    ];
                    $model->save($values);
                    $session->setFlashdata('success', 'API User Successfully Added');
                    return redirect()->to('pages/api');
    
                }
            }
    
            
            return view('pages/api');
        }

        public function processtokens(){
            $data = [];
            helper(['form']);
            $apiuser_model = new APIUserModel();
            $apiusers = $apiuser_model->findAll();
            $apiuser_options = [];
            // dd($apiuser_options);
            foreach($apiusers as $apiuser){
                $apiuser_options[$apiuser['apiuser_id']] = $apiuser['username'];
            }       

            $apiproduct_model = new APIProductsModel();
            $apiproducts = $apiproduct_model->findAll();
            $apiproduct_options = [];
            foreach($apiproducts as $apiproduct){
                $apiproduct_options[$apiproduct['apiproduct_id']] = $apiproduct['productname'];
            }
           // dd($apiproduct_options);

            if ($this->request->getMethod() == 'post'){

                $session = session();

    
                    $model = new TokensModel();
    
                    $values = [
                        'api_userid' => $this->request->getPost('api_userid'),
                        'api_productid' => $this->request->getPost('api_productid'),
                        'api_token' => uniqid()
                    ];

                    $model->save($values);
                    $session->setFlashdata('success', 'Tokens Successfully Generated');
                    return redirect()->to('pages/tokens');
    
            }
    
            
            return view('pages/tokens',['apiuser_options' => $apiuser_options, 'apiproduct_options' => $apiproduct_options]);
            
        }


public function update($categoryid)
{
    helper(['form','url']);
    $category_model = new CategoryModel();
    $model = $category_model->where('category_id',$categoryid)->first();
    
            if ($this->request->getMethod() == 'post'){
                $rules = [
                    'category' => 'required|min_length[2]|max_length[10]',
    
                ];
    
                if (!$this->validate($rules)){
                    return view('Pages/editCategory',['validation'=>$this->validator]);
                }
                else{
                                    
    
                    $values = array(
                         'category_id'=>$categoryid,
                        'category_name' => $_POST['category'],                    );
                        
                   $categorymodel= new CategoryModel();
                   $categorymodel->save($values);
                    $session = session();
            $session->setFlashdata('success', 'category Successfully updated');
                    return redirect()->to('pages/categoryshow');
    
                }


                }


}

      public function category_delete($categoryid){
            $category_model = new CategoryModel();
            $category_model->delete($categoryid);
            $session = session();
            $session->setFlashdata('success', 'category Deleted');
            return redirect()->to("pages/categoryshow");

}
 public function adminadduser()
    {
       $validation=$this->validate([
        'firstname'=>'required',
        'lastname'=>'required',
        'email'=>'required|valid_email|is_unique[tbl_users.email]',
        'gender'=>'required',
        'username'=>'required',
        'password'=>'required|min_length[5]|max_length[12]',
        'role' => 'required',


]); 
       if(!$validation){
        return view('auth/register.php',['validation'=>$this->validator]);
       }
       else{

       //stores in db 
        $firstname=$this->request->getPost('firstname');
        $lastname=$this->request->getPost('lastname');
        $email=$this->request->getPost('email');
        $gender=$this->request->getpost('gender');
        $username=$this->request->getPost('username');
        $password=$this->request->getPost('password');
        $role =$this->request->getPost('role');

        $values=[

              'firstname'=>$firstname,
              'lastname'=>$lastname,
              'email'=>$email,
              'gender'=>$gender,
              'username'=>$username,
              'password'=>Hash::make($password),
              'role'=>$role,
        ];

        $usermodel= new \App\Models\userModel();
        $query =$usermodel->insert($values);
        if(!$query){
            return redirect()->back()->with('fail','something is wrong');
        }else{
            return redirect()->to('Pages/listusers')->with('sucess','You are registered');
        }

       }



    }


   public function addsubcategory()
   {
    $addsubcategory= new SubcategoryModel();
    $subcategoryinfo= array('subcategory_name'=>$_POST['subcategory'],'category_id'=> 4);
    if(preg_match("/Men/",$subcategoryinfo['subcategory_name']))
    {
       $category_id =1;
    }
elseif(preg_match('/Women/',$subcategoryinfo['subcategory_name'])){
        $category_id =2;
     }
     elseif(preg_match('/Children/',$subcategoryinfo['subcategory_name'])){
        $category_id =3;
     }else{
        $category_id =4;
     }
     $subcategoryinfo['category_id']=$category_id;
$addsubcategory->save($subcategoryinfo);
   $session = session();
            $session->setFlashdata('success', 'subcategory added');
            return redirect()->to("pages/subcategoryshow");
}



public function subcategory_delete($subcategory_id){
            $sub_model = new subcategorymodel();
            $sub_model->delete($subcategory_id);
            $session = session();
            $session->setFlashdata('success', 'subcategory Deleted');
            return redirect()->to("pages/subcategoryshow");

}
public function subupdate($subcategoryid)
{
    helper(['form','url']);
    $subcategory_model = new SubcategoryModel();
    $model = $subcategory_model->where('subcategory_id',$subcategoryid)->first();
    
            if ($this->request->getMethod() == 'post'){
                $rules = [
                    'subcategory' => 'required'
    
                ];
    
                if (!$this->validate($rules)){
                    return view('auth/subcategory_edit.php',['validation'=>$this->validator]);
                }
                else{
                                    
    
                    $values = array(
                         'subcategory_id'=>$subcategoryid,
                        'subcategory_name' => $_POST['subcategory'],                    
                    );
                        
                   $subcategorymodel= new SubcategoryModel();
                   $subcategorymodel->save($values);
                    $session = session();
            $session->setFlashdata('success', 'subcategory Successfully updated');
                    return redirect()->to('pages/subcategoryshow');
    
                }


                }


}
public function editItem($productid){

     helper(['form','url']);
    $item_model = new ItemModel();
    $model = $item_model->where('product_id',$productid)->first();
     $validation=$this->validate([
         'name'=>'required'

     ]);

 if(!$validation){
            return view('admin/items/items_add.php',['validation'=>$this->validator]);
       }
       else{

       //stores in db 
        $name=$this->request->getPost('name');
        $description=$this->request->getPost('description');
        $image=$this->request->getPost('image');
        $price=$this->request->getPost('price');
        $quantity=$this->request->getPost('quantity');
        $subcategory =$this->request->getPost('subcategory');
        $createdat=$this->request->getPost('createdat');

        $values=[
               'product_id'=> $productid,
              'product_name'=>$name,
              'product_description'=>$description,
              'product_image'=>$image,
              'product_price'=>$price,
              'available_quantity'=>$quantity,
              'subcategory'=>$subcategory,
              'created_at'=>$createdat,
        ];
        

        
        $itemmodel= new \App\Models\ItemModel();
        $itemmodel->save($values);
        $session = session();
        $session->setFlashdata('sucess','You Successfully edited an item');
        return redirect()->to('Pages/itemshow');


       }

      }

}













        
    
    

    



    




    



