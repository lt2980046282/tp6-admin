<?php
namespace app\controller;

use app\BaseController;

class Error extends BaseController
{
    public function index()
    {
    	return view('admin/error');
    }

    
}
