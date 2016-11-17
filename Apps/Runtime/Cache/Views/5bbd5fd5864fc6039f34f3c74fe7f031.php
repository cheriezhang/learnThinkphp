<?php if (!defined('THINK_PATH')) exit();?><!--
    作为父模板,在子模板中写上<extend name="本文件路径"/>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Page Description">
<meta name="author" content="zhangxue">
<title>极客学院-ThinkPHP</title>

<!-- Bootstrap -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->     <!--head和下面的navbar js都是模板,替换了本来在这里的代码-->
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">极客学院-ThinkPHP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">主页</a></li>   <!--接收参数[]-->
            <li><a href="#">Link</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">主题<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo U('index',array('t'=>'default'));?>">默认主题</a></li>
                    <li><a href="<?php echo U('index',array('t'=>'jike'));?>">极客主题</a></li>
                    <!--<li><a href="#">Something else here</a></li>-->
                    <!--<li><a href="#">Separated link</a></li>-->
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav> <!--传递参数-->

    <div class="container">
        
            Header block
        
    </div>
    <div class="container">
        <div class="col-md-2 list-group">
            <a class="list-group-item" href="<?php echo U('index');?>">主页</a>   <!--左边两列为列表,点击显示index页面-->
            <a class="list-group-item" href="<?php echo U('friends');?>">好友</a>  <!--左边两列为列表,点击显示friends页面-->
        </div>
        <div class="col-md-10">
            

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">好友列表</h3>
    </div>
    <ul class="list-group media-list">
        <!--volist循环-->
        <!--volist是查询数据集结果输出,name要和模板赋值即assign那里一致,id是当前的循环变量,不要和name冲突
        在使用变量时,如friends数组中的avatar部分,就要用到i循环变量而不是friends 带双花括号的要加$,双引号则不用-->
        <?php if(is_array($friends)): $i = 0; $__LIST__ = $friends;if( count($__LIST__)==0 ) : echo "none" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><li class="list-group-item media">
                <a class="pull-left" href="#">
                    <!--empty判断头像是否为空-->
                    <?php if(empty($i['avatar'])): ?><!--为空则输出default 显示图片为media-object-->
                        <img width="120" height="120"  class="media-object" src="/thinkphp/Upload/avatar/default.jpg"
                             alt="<?php echo ($i['username']); ?>">
                        <?php else: ?>
                        <!--不为空则输出用户头像-->
                        <img width="120" height="120"  class="media-object" src="/thinkphp/Upload/avatar/<?php echo ($i['avatar']); ?>"
                             alt="<?php echo ($i['username']); ?>"><?php endif; ?>
                </a>
                <div class="media-body">
                    <h4 class="media-heading">
                        <?php echo ($i['username']); ?>(今年<?php echo ($i["age"]); ?>岁)

                        <!--
                            eq	: ==
                            neq : !=
                            gt  : >
                            egt : >=
                            lt  : <
                            elt : <=
                            heq : ===
                            nheq:!==
                        -->

                        <!--eq,判断年龄是否是30岁 type="eq"和<?php if(($name) == "value"): ?>value<?php endif; ?>等效-->
                        <?php if(($i['age']) == "30"): ?><span class="label label-warning">恰好30岁</span><?php endif; ?>
                        <!--if else-->
                        <!--如果年龄小于18岁-->
                        <?php if($i['age'] < 18): ?><span class="pull-right">未成年</span>
                            <?php else: ?>
                            <!--否则输出按钮 注意else后面写/-->
                            <a href="#" class="pull-right btn btn-warning">需满18岁</a><?php endif; ?>
                    </h4>
                    <p>
                        <!--比较标签-->

                        <!--lt比较年龄 eq也可以这么用-->
                        <?php if(($i['age']) < "18"): ?>未成年<?php endif; ?>
                        <?php if(($i['age']) < "18"): ?><span class="text-danger">
										注意,compare标签也表示:<?php echo ($friend['username']); ?>未成年!</span><?php endif; ?>
                        <!--egt方式比较年龄-->
                        <?php if(($i['age']) >= "35"): ?>中年人<?php endif; ?>
                        <!--between方式比较年龄-->
                        <?php $_RANGE_VAR_=explode(',',"18,34");if($i['age']>= $_RANGE_VAR_[0] && $i['age']<= $_RANGE_VAR_[1]):?>青年<?php endif; ?>
                    </p>
                    <div>
                        标签:
                        <!--Volist循环嵌套输出tags标签-->
                        <?php if(is_array($i['tags'])): $i = 0; $__LIST__ = $i['tags'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><span class="label label-success"><?php echo ($tag); ?></span><?php endforeach; endif; else: echo "none" ;endif; ?>
                    </div>
                </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>

        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!--以下为内置标签 内置标签还有很多,包括include-->
<!--import-->
<script type="text/javascript" src="/thinkphp/Public/js/bootstrap.js"></script>

<!--load-->
<script type="text/javascript" src="/thinkphp/Public/js/jquery.js"></script>

<!--css-->
<link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/bootstrap.css" />

<!--js-->
<script type="text/javascript" src="/thinkphp/Public/js/bootstrap.js"></script>
</body>
</html>