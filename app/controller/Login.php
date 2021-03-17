<?php
namespace app\controller;

use app\BaseController;

class Login extends BaseController
{
    public function index()
    {
    	return view('admin/login');
    }

   
}
