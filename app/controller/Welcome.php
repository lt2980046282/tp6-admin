<?php
namespace app\controller;

use app\BaseController;

class Welcome extends BaseController
{
    public function index()
    {
    	return view('admin/welcome');
    }

    
}
