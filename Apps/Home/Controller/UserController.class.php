<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
      //  $this->redirect('edit','',2,'纯跳转');   //直接跳转当前控制器方法\\时间\\提示信息
        //$this->success('成功跳转',U('User/login'),3); //提示成功界面,提示信息,跳转地址用U函数,自动跳转时间
        //$this->error('出错了,正在跳转',U('User/login'),5); //提示成功界面,提示信息,跳转地址用U函数,自动跳转时间
        //$this->ajaxReturn(getTestData(),'xml');  //返回值和其格式(json或者XML)
        //$server=I('server.');    //取出server的所有变量
        $server=I('server.HTTP_HOST');   //取出server http_host变量 I函数
        dump($server);
    }
    public function edit(){
        echo "user.index";
    }
    public function login(){
        echo "user.login";
        $user=I('get.user',null);   //取出get方式获取变量的user,如果不存在,返回null  比如login/user/jike  ,就能获取到了
        if($user==='jike'){
            $this->success('hello jike',U('User/index'),3);
        }
        else{
            $this->error('error jike',U('User/index'),3);
        }
    }
}