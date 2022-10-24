<?php 
namespace App\Controllers;

use \App\Libraries\Oauth;
use \OAuth2\Request;
use CodeIgniter\API\ResponseTrait;
use App\libraries\Hash;
use App\Models\ApiModel;


class user extends BaseController
{
    use ResponseTrait;

    public function login(){
        $oauth = new Oauth();
        $request = new Request();
        $respond = $oauth->server->handleTokenRequest($request->createFromGlobals());
        $code = $respond->getStatusCode();
        $body = $respond->getResponseBody();
        return $this->respond(json_decode($body), $code);
    }

    public function register(){
        helper('form');
        $data = [];

        if($this->request->getMethod() != 'post')
            return $this->fail('Only post request is allowed');


        $rules = [
         'gender'=>'required',   
        'email'=>'required|valid_email|is_unique[api_users.email]',
        'username'=>'required',
        'password'=>'required|min_length[5]|max_length[12]'
        ];

        if(! $this->validate($rules)){
            return $this->fail($this->validator->getErrors());
        }else{
            $model = new ApiModel();

        $email=$this->request->getPost('email');
        $gender=$this->request->getpost('gender');
        $username=$this->request->getPost('username');
        $password=$this->request->getPost('password');

        $data=[

             
              'email'=>$email,
              'gender'=>$gender,
              'username'=>$username,
              'password'=>Hash::make($password),
              
        ];

            $user_id = $model->insert($data);
            $data['id'] = $user_id;
            unset($data['password']);

            return $this->respondCreated($data);
        }

    }



}
