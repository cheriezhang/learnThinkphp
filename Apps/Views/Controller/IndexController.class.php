<?php
namespace Views\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function Index()
    {
        $username = 'linda';
        $email = 'linda@jike.com';
        $age = 18;
        $birthday_year =1990;
        $this->assign('birthday_year',$birthday_year);
//        $this-> assign('user',$username);   //这是一种模板变量赋值的方法 模板中用{$user,$email,$age}
//        $this-> assign('mail',$email);
//        $this-> assign('age',$age);

        $user = array(
            'user' => $username,
            'mail' => $email,
            'age' => $age
        );
        //assign是控制器和display的桥梁
        $this->assign('user',$user);                //将数组直接赋值  模板中则用{$user.mail}

        //好友变量赋值
        $this->assign('friends',get_user_friends());
        //layout('layout');               //对应Index里的index.html

//        $fetchContent = $this->fetch();           //fetch适用于需要修改变量的内容
//        $fetchContent = str_replace('jike','jikexueyuan',$fetchContent);
//        $this->show($fetchContent);           //show与fetch配合使用

        $this->display();    //模板渲染函数 display('[模板文件]'[,'字符编码'][,'输出类型'])
    }

    public function friends(){     //对应Index里的friends.html
        //好友数量变量赋值
        $this->assign('friends',get_user_friends());
        //layout('layout');
        $this->display();
    }
}