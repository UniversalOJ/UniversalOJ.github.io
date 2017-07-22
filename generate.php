<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
	<title><?php echo $argv[2]; ?> - UOJ部署指北</title>

	<!-- css -->
	<link href="/css/base.min.css" rel="stylesheet">
	<link href="/css/project.min.css" rel="stylesheet">
	<link href="/css/styles.css" rel="stylesheet">
	<link href="/css/gitment.default.css" rel="stylesheet">

</head>
<body class="page-brand">
	
	<header class="header header-transparent header-waterfall ui-header">
		<ul class="nav nav-list pull-left">
			<li>
				<a data-toggle="menu" href="#menu">
					<span class="icon icon-lg">menu</span>
				</a>
			</li>
		</ul>
		<a class="header-logo header-affix-hide margin-left-no margin-right-no" data-offset-top="213" data-spy="affix"><?php echo $argv[2];?></a>
		<span class="header-logo header-affix margin-left-no margin-right-no" data-offset-top="213" data-spy="affix"><?php echo $argv[2];?></span>

		<ul class="nav nav-list pull-right">
			<li>
				<a data-toggle="menu" href="/">
					<span class="avatar avatar-sm"><img alt="logo" src="https://i2.buimg.com/519918/1da8328ee5b4147a.png"></span>
				</a>
			</li>
		</ul>

	</header>

	<?php require_once("nav.php"); ?>

	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<tit class="content-heading"><?php echo $argv[2];?></tit>
			</div>
		</div>
		<div class="container">
			<section class="content-inner margin-top-no">
				<div class="row">
					<div class="col-lg-13 col-md-13">
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner page-card-inner">
						
<?php 

	system("python3 gen.py $argv[1]");
	$argv[1] = str_replace(".md","",$argv[1]);
	

?>

								<hr>

								<!-- Gitment 评论框 start -->

								<div id="container"></div>

								<!-- Gitment 评论框 end -->

								</div>
							</div>
						</div>
					</section>
				</div>
			</div>

			
			<hr>
			<center>[CC协议 BY-NC-SA] 署名 - 非商业性使用 - 相同方式共享  @ UOJ部署指北 2017.</center>

		</div>


	</main>
	
	<div class="fbtn-container">
		<div class="fbtn-inner">
			<a class="fbtn fbtn-lg fbtn-brand-accent waves-attach waves-circle waves-light" data-toggle="dropdown">
				<span class="fbtn-text fbtn-text-left">Home</span>
				<span class="fbtn-ori icon">apps</span>
				<span class="fbtn-sub icon">close</span>
			</a>
			<div class="fbtn-dropup">
				<a class="fbtn waves-attach waves-circle" href="https://github.com/UniversalOJ/UniversalOJ.github.io/issues" target="_blank">
					<span class="fbtn-text fbtn-text-left">反馈</span><span class="icon">feedback</span>
				</a>
				<a class="fbtn fbtn-green waves-attach waves-circle" href="/" target="_self">
					<span class="fbtn-text fbtn-text-left">返回主页</span><span class="icon">home</span>
				</a>
			</div>
		</div>
	</div>

	

	<!-- js -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/base.min.js"></script>
    
    <!-- Gitment JS 代码 start -->
    <script src="/js/gitment.browser.js"></script>
    <script>
    var gitment = new Gitment({
      id: location.href,
      owner: 'UniversalOJ',
      repo: 'UniversalOJ.github.io',
      oauth: {
        client_id: '0dc093a9aefa1d501df2',
        client_secret: '3639aabd1bc6b0d9b543be1f13b6bcb2bf7364af',
      },
    })
    gitment.render('container')
    </script>
    <!-- Gitment JS 代码 end -->
    
</body>
</html>
