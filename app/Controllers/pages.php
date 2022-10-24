<?php

namespace App\Controllers;

class Pages extends BaseController
{
   public function __construct(){
        helper(['url,form']);
    }

    public function index()
    {
        return view('auth/homepage.php');
    }
    public function login()
    {
        return view('auth/login.php');
    }
     public function register()
    {
        return view('auth/register.php');

     }
    public function admin()
    {

        return view('admin/index.php');
    }
    public function apiuser(){
        return view('auth/apiuser.php');
    }

    public function addusers()
    {
        return view('admin/users/users_add.php');
    }
    public function listusers()
    {
        return view('auth/user_list.php');
    }
    public function item()
    {
        return view('admin/items/items_add.php');
    }
    public function itemshow()
    {
        return view('auth/items_show.php');
    }
    public function addcategory()
    {
        return view('admin/category/category_add.php');
    }
    public function categoryshow()
    {
        return view('auth/category_show.php');
    }

    
    public function addsubcategories()
    {
        return view('admin/subcategories/sub_add.php');

            }

 public function subcategoryshow()
 {
    return view('auth/subcategory_show.php');
 }

 public function useredit()
 {

      return view('auth/users_edit.php');
 }
 public function checkout()
 {
    return view('auth/checkout');
 }
 public function tokens()
 {
    return view('admin/users/tokens.php');
 }
 public function api()
 {
    return view('admin/users/apiuser_add.php');
 }
 public function editCategory()
{

  return view('auth/category_edit.php');
 }
 public function editSubcategory()
 {
    return view('auth/subcategory_edit.php');
 }
public function edititem()
{
    return view('auth/items_edit.php');
}
}
