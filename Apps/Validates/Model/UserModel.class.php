<?php
namespace Models\Model;
use Think\Model;

/*
 * 对应数据表:user
 * 对用数据表:jike_user
 */
class UserModel extends Model{
    /*自动验证*/
    protected $_validate = array(
      array(
          'name',
          'require',            //验证规则
          'needed',             //提示信息
          self::EXISTS_VALIDATE,    //验证条件
          'regex',              //附加规则,正则验证,默认的
          self::MODEL_INSERT    //验证时机
      ),
        array(
            'name',
            '/*jike_[A-Za-z]+$/',
            '以jike_开头'
        ),
        array(
            'name',
            'filter_name',   //
            '含有敏感词',
            self::EXISTS_VALIDATE,
            'function'      //指验证规则是个函数 ,函数在common文件夹里定义
        ),
        array(
            'name',
            '',
            '已占用',
            self::EXISTS_VALIDATE,
            'unique',
            self::MODEL_INSERT
        ),
        array(
            'birthday',
            'checkBirthday',
            '超出范围',
            self::VALUE_VALIDATE,
            'callback',    //callback是调用定义在本文件(模型类)里的一个方法,写在下面
            self::MODEL_BOTH
        )
    );
    function  checkBirthday($value){
        $start=strtotime('1900-1-1');
        $end = NOW_TIME;
        $value_time=strtotime($value);

        return $value_time >=$start && $value_time<=$end;
    }

    /*自动填充*/
    protected $_auto = array(
        array(
            'password',
            'md5',
            self::MODEL_BOTH,
            'function'  //使用系统函数也写function
        ),
        array(
            'ip',
            'get_client_ip',
            self::MODEL_BOTH,
            'function'
        )
    );

}