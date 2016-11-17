<?php
return array(
	//'配置项'=>'配置值'
//    'DEFAULT_V_LAYER'      => 'Template',        //模板文件位置 本模块下的Template目录,默认为View目录
//    'TMPL_TEMPLATE_SUFFIX' => '.jike',           //模板文件后缀
//    'TMPL_FILE_DEPR'       => '_',               //配置连接符,防止目录很深 模板位置在Template目录下Index_index.jike
//    'VIEW_PATH'            => './Theme/Views/'   //模板文件定义目录在根目录theme的views文件夹下
      'URL_MODEL'            =>  3,                //选定URL模式
      'DEFAULT_THEME'        => 'default',         //使用默认主题
      'TMPL_DETECT_THEME'    => true,              //检测模板
      'THEME_LIST'           => 'default,jike',    //共有几种模板
      'TMPL_L_DELIM'         => '{{',              //变量界定左符
      'TMPL_R_DELIM'         => '}}',
      'TMPL_PARSE_STRING'    => array(
                //   '__CDN__' =>'/.Cdn',             //模板替换,改成这个目录,__Public__就可以换成这个了__CDN__了
                   '__AVATAR__'=>__ROOT__.'/Upload/avatar'  //upload下的avatar可以直接写为__AVATAR__,写上root是防止路径错误
      ),
//    'TAGLIB_PRE_LOAD'      =>'Views\TagLib\jike', //自定义标签库加载位置
//    'TAGLIB_BUILD_IN'      =>'Views\TagLib\jike'
//    'LAYOUT_ON'            => TRUE,               //这三个配置是用全局模式开启模板布局
//    'LAYOUT_NAME'          => 'layout',
//    'TMPL_LAYOUT_ITEM'   => '{__CONTENT__}',

);