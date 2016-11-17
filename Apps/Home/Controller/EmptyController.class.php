<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller {  //仅仅可以解决无法找到控制器的问题

    public function _empty(){  //可以实现无法找到操作方法的问题
        echo "您是怎么找到我的!";
    }
    public function index(){  //控制器写empty后不写操作就执行这个
        echo "Index";
    }
}