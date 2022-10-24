<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserRoles;

class Usersession extends BaseController
{
    public function index()
    {
        
        

        $usermodel = new \App\Models\userModel();
        $loggeduserID=session()->get('loggeduser');
        $userinfo=$usermodel->find($loggeduserID);
        $data=[
            'userinfo'=>$userinfo

        ];

        return view('auth/homepage.php',$data);
 
}