<?php
namespace app\controller;

use app\BaseController;

class MemberList extends BaseController
{
    public function index()
    {
    	return view('admin/member-list');
    }
	
   
}
