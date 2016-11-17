<?php
namespace Models\Controller;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {
    public function Index(){
        /*三种实例化方法*/
//       //new
//        $user_model = new \Models\Model\UserModel();    //一定要在Models前面加\,不然找不到控制器,下面同理
//
//        //M
//        $user_m_model = M('User');
//
//        //D
//        $user_d_model =D('User');
//
//        //空模型
//        $empty_model = new \Think\Model();
//        $empty_m_model = M();
//        $empty_d_model = D();
        /*模型数据库配置*/
        /*$user = D('User');   //D函数实例化自定义的模型
        //dump($user->select());  //select方法为select * from
        dump($user->getDbFields());  //读取数据信息
        */

        /*db方法:切换数据库 */
        /*第一个参数:序号,用于标识数据库,默认为0,每切换一次,给一个新的编号,
        第二个参数:连接信息,或者包含信息的配置项名称
        table方法:指定数据表
        dump($user->db(1,'DB_2')->table('user')->select());
        */

        /*调用增删查改方法*/
        //$this->createUser();   //增加
        //$this->updateUserStatus(1);
        //$this->deleteUser(1);
        //$this->showUser(2);
        //$this->listUsers();

        /*连贯操作*/
//        $userModel = D('User');
//        //下面语句直接在where里写条件
//        //$userModel->where('id=2')->select();   //where是连贯方法,select是终结方法
//        //下面语句单独写条件,再查询
//        $condition=array(
//                   'id'=>'2',
//                   'name'=>'李四'
//        );
//        $userModel->where($condition)
//                  ->order('id desc')
//                  //->limit(2,3)     //limit(2),限制读取两条;limit(2,3),从第2条开始取3条
//                  ->page(6,10)      //读取第6页,每页10行
//                  ->fetchSql(true)   //无论后面有没有终结方法,都只生成sql语句。
//                  ->select();
//
//        echo ($userModel->getLastSql());、

        /*字段映射*/
        //$this->createUser();
        $this->listUsers();

    }

    /*添加数据*/
    private function createUser(){
        $userAttribute=array(
            'name'=>'李四',
            'password'=>md5('123456'),
            'email'=>'1234567@qq.com'
        );

        $userAttribute_1=array(
            'zhanghao'=>'linda',
            'word'=>md5('123456'),
            'youjian'=>'1234567@qq.com'
        );

        //不能直接调用add(),要先用create(),再调用add()
        $userModel=D('user');
        $userModel->create($userAttribute_1);
        $userModel->add();

        //D('User')->add($userAttribute_1);
    }

    /*用ActiceRecord模式添加用户*/
    private function createUserAR(){
        //实例化对象
        $user = D('user');
        //将记录映射到对象
        $user->name = 'linda';
        $user->password = md5('1111');
        $user->email = '111111@qq.com';
        //添加
        $user->add();
    }

    /*查询数据*/
    private function listUsers(){
        dump(D('User')->select());
    }

    /*更新数据*/
    private function updateUserStatus($userid){
        $userUpdateAttribute = array(
            'id'=>$userid,
            'name'=>'Tom',
        );
        D('User')->save($userUpdateAttribute);
    }

    /*使用ActiveRecord模式更新*/
    private function updateUserStatusAR($userid){
        $user = D('user');

        $user->id = $userid;
        $user->status = 0;

        $user->save();   //直接用save更新
    }

    /*删除数据*/
    private function deleteUser($userid){
        D('User')->delete($userid);
    }

    /*读取数据*/
    private function showUser($userid){
        dump(D('User')->find($userid));
    }

}