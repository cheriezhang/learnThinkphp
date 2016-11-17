<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

//定义公共模块?没成功
define('COMMON_PATH','./Common/');

//定义自动生成模块   若要生成控制器则需要一起生成,已绑定模块后不能再添加***
//绑定模块后为自动修改默认模块为绑定模块
//define('BIND_MODULE','Admin');
//define('BIND_MODULE','Views');
//define('BIND_MODULE','Models');
define('BIND_MODULE','Validates');
define('BUILD_DIR_SECURE',false);


//定义模块中的控制器 当前默认模块  build——XX——list可以生成其他类,如模型类,和上面的一起使用
//define('BUILD_CONTROLLER_LIST','Index,User,Menu');

//定义配置文件格式 除了默认设置外只读取yaml格式的文件
//define('CONF_EXT','.yaml');

// 定义应用目录
define('APP_PATH','./Apps/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单