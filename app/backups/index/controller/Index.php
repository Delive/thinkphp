<?php
namespace app\index\controller;
use app\common\controller\Index as commonIndex;   //common模块为保留模块不嫩直接使用，可以设置变量名再使用
use app\common\controller\User as userIndex;

class Index
{
    public function index(){
        return "index Index index";
    }

    public function common(){
        $common = new commonIndex();
        return $common->index();
    }

    public function showName(){
        $userName = new userIndex();
        $name = 'zhangsan';
        return $userName->showName($name);

    }
}
