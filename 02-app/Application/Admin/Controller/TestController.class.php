<?php

namespace Admin\Controller;

use Think\Controller;

class TestController extends Controller
{
  public function test1()
  {
    echo "test1����";
    // 使用assign()方法给模板变量赋�??
    $data = date('Y-m-d');

    // 测试链接数据库查找admin�??
    $test = M('admin')->select();
    print_r($test);
    die;

    $this->assign("data", $data);

    //  

    //  使用display()方法渲染View/Test文件下的test1.html文件
    $this->display();
  }
  public function test2()
  {
    echo "test2";
  }
}
