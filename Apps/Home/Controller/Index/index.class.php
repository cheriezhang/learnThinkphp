<?php
namespace Home\Controller\Index;   //命名空间要修改为这个Index的路径
use Think\Controller;
class index extends Controller {    //run操作绑定到index类中

    public function run(){
        echo "bind action";
    }
}