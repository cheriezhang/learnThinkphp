<?php
namespace Models\Model;
use Think\Model;

/*
 * 对应数据表:user
 * 对用数据表:jike_user
 */
class UserModel extends Model{

//    protected $tablePrefix = 'jike_';  //定义数据表前缀,不定义是user表,定义了是jike_user表
//    protected $tableName = 'member';   //定义数据表名称,定义完对应jike_member
//
//    protected $trueTableName = 'jike_AdminUser';   //保留数据表名称的大小写。thinkphp默认全小写,linus则区分
    /*定义字段*/
//    protected $fileds = array(     //field为关键字?
//        'id',
//        'name',
//        'password',
//        'email',
//        '_PK' =>'id',
//        '_type' =>array(
//            'id'=>'int',
//            'name'=>'char',
//            'password'=>'char',
//            'email'=>'varchar',
//        )
//
//    );

    /*命名范围*/
//    protected $_scope=array(    //定义_scope属性,在下面用scope方法调用 使用时必须用D()实例化
//        'latest'=>array(
//            'order'=>'id',
//            'limit'=>20
//        ),
//        'vip'=>array(
//            'where'=>array(
//                'is_vip'=>1
//            )
//        )
//    );
//
//    //取最近注册的10个用户
//    public function getLatestUsers(){
//        $result=$this->order('id')->limit(10)->select();  //普通方法
//        $result=$this->scope('latest')->select();       //使用命名空间方法scope参数为定义的属性名
//        $result=$this->scope('latest',array('limit'=>20))->select();   //还可以改scope属性中的值
//        return $result;
//    }
//
//    //最近注册的10个VIP用户
//    public  function getLatestVipUser(){
//        $condition=array(
//            'is_vip'=>1
//        );
//        $result=$this->where($condition)
//                     ->order('id')
//                     ->limit(10)
//                     ->select();           //以上为普通方法
//
//        /*命名空间方法*/
//        //若有相同的属性,则后面的覆盖前面的
//        $result=$this->scope('vip')->scope('latest')->select();
//        //or 合二为一
//        $result=$this->scope('vip,latest');
//        //or 用scope的命名范围名称也可以调用
//        $result=$this->vip()->scope('latest')->select();
//        //or default 如果在_scope中定义了default命名范围,就不用写名字了
//        $result=$this->scope()->select();
//
//        return $result;
//
//    }

    /*查询方法*/
//    public function sql_1(){
//
//        /*查询条件定义的三种方式,默认的连接都是and*/
//
//        //字符串方式定义查询条件
//        $conditionString='status=1 AND is_vip=1';   //and改成or就是逻辑或
//
//        //数组方式定义查询条件
//        $conditionString=array(
//            'status'=>1,
//            'is_vip'=>1,
//            '_logic'=>'OR'
//        );
//
//        //对象
//        $conditionClass=new \stdClass();
//        $conditionClass->status=1;
//        $conditionClass->is_vip=1;
//        $conditionClass->_logic='OR';
//
//    }
//
//    //表达式查询 (dislike)
//    public function sql_2(){
////                            eq	: ==
////                            neq : !=
////                            gt  : >
////                            egt : >=
////                            lt  : <
////                            elt : <=
////                            between; not between; in; not in
//     $condition=array(
//         'name'=>array('eq','linda'),
//         //表达式
//         'score'=>array('exp'=>'score+2')
//     );
//    }
//
//    //快捷查询 用于表单验证,如那种登陆名可以是用户名,可以是手机邮箱等的情况
//    public function sql_3(){
//        $condition=array(
//            'name|email|mobile'=>I('post.account'),
//            'password'=>md5(I('post.password'))
//        );
//    }
//    //区间查询(dislike) 一个字段有多个约束查询
//    public function sql_4(){
//        $condition=array(
//            'age'=>array(
//                array('egt',18),
//                array('elt',35)
//            ),
//            'score'=>array(
//                array('elt',99),
//                array('egt',1000),
//                'or'
//            ),
//        );
//    }
//
//    //组合查询(dislike)
//    public function sql_5(){
//        $subCondition=array(
//            'status'=>1,
//            'age'=>array('gt',18),
//            '_logic'=>'and'
//        );
//
//        $condition=array(
//            '_string'=>'status=1 and age>18',
//            '_query'=>'status=1&age>18&_logic=and',
//            '_complex'=>$subCondition
//        );
//    }
//
//    //统计查询(need)
//    public function sql_6(){
//        $this->count();
//        $this->max('age');
//        $this->min('age');
//        $this->avg('age');
//        $this->sum('age');
//    }
//
//    //sql查询 注意要用M()实例化 (like)
//    public function sql_7(){
//        M()->query('select * from user WHERE status=1');
//
//        M()->excute('update user set status=0 where id=1');
//    }
//
//    //动态查询
//    public function sql_8(){
//        $this->getFieldByName('linda','email');  //只取出linda的email字段
//        $this->getByName('linda');          //取出名字为linda的一条数据
//    }

    /*字段映射*/
    protected $_map = array(
        'zhanghao' => 'name',
        'word'     => 'password',
        'youjian'  => 'email'
    );
}