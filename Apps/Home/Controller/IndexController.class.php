<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    /*public function _before_index(){  //前置操作
        echo "Index.before</br>";
    }*/

    public function index(){
        echo "Home->IndexController</br>";
        $this->listActionsUrl();
      /*$config =C('');   //读取全部配置项
      dump($config);    //打印配置
      */
    }

    /*public function _after_index(){  //后置操作
        echo "Index.after</br>";
    }*/

    public function listAction(){     //这是一个操作方法  但是没实现,怎样执行操作方法
        echo "list";
    }
    private function listActionsUrl(){
        echo "当前的URL模式为:".C('URL_MODEL');
        echo "<hr>";
        echo "User控制器index的操作方法URL为:<a href=\"".U('Home/User/index')."\">".U('Home/User/index');   //前一个U()是url,后一个U()是显示
        echo "<hr>";
        echo "User控制器edit的操作方法URL为:<a href=\"".U('Home/User/edit')."\">".U('Home/User/edit');
        echo "<hr>";
        echo "User控制器login的操作方法URL为:<a href=\"".U('Home/User/login')."\">".U('Home/User/login');
        echo "<hr>";
    }
}