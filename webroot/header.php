<!DOCTYPE html>
<html lang="zh-CN">
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
					<span class="avatar avatar-sm"><img alt="logo" src="/img/logo.png"></span>
				</a>
			</li>
		</ul>

	</header>

	<?php require_once("sidebar.php"); ?>

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
						