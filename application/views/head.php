<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>
    <link href='<?php echo $base_url ?>css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo $base_url ?>css/bootstrap-responsive.css' rel='stylesheet' type='text/css'>
    <script src='<?php echo $base_url ?>js/jquery-1.8.3.min.js'></script>
    <script src='<?php echo $base_url ?>js/bootstrap.min.js'></script>
    <style type="text/css">
			body {
				padding-top:20px;
				padding-bottom:60px;
			}
			.container{
				margin:0 auto;
				max-width:1000px;
			}
			.container>hr{
				margin:60px 0;
			}
			.jumbotron {
				margin:80px 0;
				text-align:center;
			}
			.jumbotron h1 {
				font-size:100px;
				line-height:1;
			}
			.jumbotron .lead {
				font-size:24px;
				line-height:1.25;
			}
			.marketing {
				margin:60px 0;
			}
			.marketing p + h4 {
				margin-top:28px;
			}
			
			.navbar .navbar-inner {
				padding:0;
			}
			.navbar .nav {
				margin:0;
				display:table;
				width:100%;
			}
			.navbar.nav li {
				display:table-cell;
				width:1%;
				float:none;
			}
			.navbar .nav li a {
				font-weight:bold;
				text-align:center;
				border-left:1px solid rgba(255,255,255,.75);
				border-right:1px solid rgba(0,0,0,.1);
			}
			.navbar .nav li: first-child a {
				border-left:0;
				border-radius:3px 0 0 3px;
			}
			.navbar .nav li: last-child a {
				border-right:0;
				border-radius:0 3px 3px 0;
			}
			</style>
			

<body>
<div class="container">
	<div class="masthead">
    	<h3 class="muted">Jessica Cook Sucks</h3>
        <div class="navbar">
        	<div class="navbar-inner">
            	<div class="container">
                	<ul class="nav">
                    	<li <?php echo ($active==1 ? 'class="Active"' : ''); ?>><a href="<?php echo $base_url ?>">Home</a></li>
                        <li <?php echo ($active==2 ? 'class="Active"' : ''); ?>><a href="<?php echo $base_url ?>index.php/projects">Projects</a></li>
                        <li <?php echo ($active==3 ? 'class="Active"' : ''); ?>><a href="#">Resume</a></li>
                        <li <?php echo ($active==4 ? 'class="Active"' : ''); ?>><a href="#">Contact</a></li>
                    </ul>
                 </div>
              </div>
         </div>
         <!-- /.navbar -->
       </div>
