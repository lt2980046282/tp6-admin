<?php
namespace app\controller;

use app\BaseController;

class AdminList extends BaseController
{
    public function index()
    {
    	return view('admin/admin-list');
    }

    
}
