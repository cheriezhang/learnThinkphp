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
        
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Success</strong>重载Header
	</div>

    </div>
    <div class="container">
        <div class="col-md-2 list-group">
            <a class="list-group-item" href="<?php echo U('index');?>">主页</a>   <!--左边两列为列表,点击显示index页面-->
            <a class="list-group-item" href="<?php echo U('friends');?>">好友</a>  <!--左边两列为列表,点击显示friends页面-->
        </div>
        <div class="col-md-10">
            
            <div class="alert alert-warning">
            	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            	<strong>default</strong>默认主题
            </div>
        	<table class="table table-hover">
        		<thead>
        			<tr>
        				<th></th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
        				<td>用户名</td>
                        <td><?php echo (strtoupper($user["user"])); ?></td>   <!--带函数写法:转化成为大写函数-->
        			</tr>
                    <tr>
                        <td>电子邮件</td>
                        <!--<td><?php echo (str_replace('jike','jikexueyuan',$user["mail"])); ?></td>  -->
						<!--上面为函数带参数写法:替换jike为jikexueyuan-->
						<td><?php echo (strtoupper(str_replace('jike','jikexueyuan',$user["mail"]))); ?></td>
						<!--上面为函数的嵌套,变量不是第一个参数要用###占位-->
					</tr>
					<tr>
						<td>电子邮件php</td>
						<td><?php echo strtoupper(str_replace('jike','jikexueyuan',$user['mail']));?></td>
						<!--上面为原始php函数的嵌套-->
					</tr>
                    <tr>
                        <td>年龄</td>
                        <td><?php echo ($user['age']-1); ?></td>     <!--数组要采取中括号索引的方式获取  进行运算-->
                    </tr>
					<tr>
						<td>计算年龄</td>
						<td><?php echo (getAge($birthday_year)); ?></td> <!--变量作为第一个参数不用写在后面-->

					</tr>
					<tr>
						<td>手机号</td>
						<td><?php echo ((isset($mobile) && ($mobile !== ""))?($mobile):'none'); ?></td>    <!--设置默认值-->
					</tr>
					<tr>
						<td>项目目录</td>
						<td><?php echo ($_SERVER['DOCUMENT_ROOT']); ?></td>    <!--输出项目目录,Think.server-->
					</tr>
        		</tbody>
        	</table>

			<!--For循环 和下面的php代码等效-->
			<div class="panel panel-default">
				<div class="panel heading">
					<h3 class="panel-title">For标签循环输出</h3>
				</div>
				<div class="list-group">
					<!--for 默认参数为-->
					<?php $__FOR_START_818450556__=0;$__FOR_END_818450556__=5;for($i=$__FOR_START_818450556__;$i < $__FOR_END_818450556__;$i+=1){ ?><a href="#" class="list-group-item">使用for标签循环了<?php echo ($i+1); ?>次了</a><?php } ?>
				</div>
			</div>

			<!--PHP标签-->
			<div class="panel panel-default">
				<div class="panel heading">
					<h3 class="panel-title">PHP标签实现php代码循环输出</h3>
				</div>
				<div class="list-group">
					<!--php标签-->
					<?php for($i=0;$i<5;$i++){ echo '<a href="#" class="list-group-item">使用php标签循环了'.($i+1).'次了</a>'; } ?>
				</div>
			</div>

			<!--literal原样输出-->
			<div class="panel panel-default">
				<div class="panel heading">
					<h3 class="panel-title">原样输出</h3>
				</div>
				<div class="panel-body">
					<blockquote>
						<pre>
							
								我们可以使用{{$user.user}}的方式在输出用户名
							
						</pre>
					</blockquote>
				</div>
			</div>

		<!--<div class="panel panel-default">-->
			  <!--<div class="panel-heading">-->
					<!--<h3 class="panel-title">Panel title</h3>-->
			  <!--</div>-->
			  <!--<div class="list-group">-->
					<!--<jike:friends  name="jike_user" uid="2" empty="没有数据">-->
						<!--<a href="#" class="list-group-item"><?php echo ($jike_user['username']); ?></a>-->
					<!--</jike:friends>-->
			  <!--</div>-->

		<!--</div>-->



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