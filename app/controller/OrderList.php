<?php
namespace app\controller;

use app\BaseController;

class OrderList extends BaseController
{
    public function index()
    {
    	return view('admin/order-list');
    }

    
}
