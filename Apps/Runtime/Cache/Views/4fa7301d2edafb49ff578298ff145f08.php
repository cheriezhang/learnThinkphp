<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
        <![endif]-->
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
        			<li class="active"><a href="#">Link</a></li>
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
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        				<ul class="dropdown-menu">
        					<li><a href="#">Action</a></li>
        					<li><a href="#">Another action</a></li>
        					<li><a href="#">Something else here</a></li>
        					<li><a href="#">Separated link</a></li>
        				</ul>
        			</li>
        		</ul>
        	</div><!-- /.navbar-collapse -->
        </nav>

        <div class="container">
        	<table class="table table-hover">
        		<thead>
        			<tr>
        				<th></th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
        				<td>用户名</td>
                        <td>linda</td>
        			</tr>
                    <tr>
                        <td>电子邮件</td>
                        <td>linda@jikexueyuan.com</td>
                    </tr>
                    <tr>
                        <td>年龄</td>
                        <td>18</td>
                    </tr>
        		</tbody>
        	</table>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>