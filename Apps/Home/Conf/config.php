<?php
return array(
	//'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysql',     // 数据库类型   配置数据库,可给数据库设密码
    'DB_HOST'               =>  'localhost', // 服务器地址
    'LOAD_EXT_CONFIG'       =>  'user',      // 一定要写加载扩展配置
    'ACTION_SUFFIX'         =>  'Action',     //操作方法后缀
   // 'ACTION_BIND_CLASS'     =>  true,       //操作绑定到类?作用?
    'URL_MODEL'            =>  3,          //选定URL模式
   // 'URL_HTML_SUFFIX'      => 'shtml',      //伪静态后缀
);