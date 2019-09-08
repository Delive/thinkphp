<?php
namespace app\index\controller;  //环境变量的第一个类必须和文件名一起大写开头
class Index
{
   public function index(){
       dump(config());
   }
}
