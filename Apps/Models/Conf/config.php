<?php
return array(
	//'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址 可写多个变为分布式
    'DB_NAME'               =>  'weather',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名 可写多个
    'DB_PWD'                =>  '',          // 密码 可写多个
    'DB_PORT'               =>  '',          // 端口 默认3306
    'DB_PREFIX'             =>  '',         // 数据库表前缀
    'DB_PARAMS'          	=>  array(),    // 数据库连接参数
    'DB_DEBUG'  			=>  TRUE,       // 数据库调试模式 开启后可以记录SQL日志

    //'DB_FIELDS_CACHE'       =>  true,       // 启用字段缓存

    'DB_CHARSET'            =>  'utf8',     // 数据库编码默认采用utf8

    /*下面四项为服务器分布式部署配置*/
    'DB_DEPLOY_TYPE'        =>  0,          // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,      // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1,          // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '',         // 指定从服务器序号

    /*配置其他服务器*/
    'DB_2'=>array(
        'DB_TYPE'               =>  'mysql',     // 数据库类型
        'DB_HOST'               =>  'localhost', // 服务器地址
        'DB_NAME'               =>  'mysql',          // 数据库名
        'DB_USER'               =>  'root',      // 用户名
        'DB_PWD'                =>  '',          // 密码
        'DB_PORT'               =>  '',        // 端口 默认3306
    ),

    /*配置读取字段映射*/
    'READ_DATA_MAP'         => TRUE
);