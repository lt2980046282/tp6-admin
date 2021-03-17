<?php
namespace app\controller;

use app\BaseController;

class MemberPassword extends BaseController
{
    public function index()
    {
    	return view('admin/member-password');
    }
}
