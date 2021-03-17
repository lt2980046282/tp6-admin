<?php
namespace app\controller;
use app\BaseController;
class Demo extends BaseController{
    function Index(){
        
        return view('admin/demo');
        
    }
}