<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="<?php echoBaseURL() ?>/admin/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echoBaseURL() ?>/admin/dist/css/adminlte.min.css">
    </head>
    <?php
    
     
    ?>
    <body class="hold-transition sidebar-mini">
  <header class="section-header py-3">
<div class="container">
	<h2>Demo page </h2> 
</div>
</header> <!-- section-header.// -->

<div class="container">

<section class="section-content py-3">
	<div class="row">
		<aside class="col-lg-3"> 
<!-- ============= COMPONENT ============== -->
<nav class="sidebar card py-2 mb-4">
<ul class="nav flex-column" id="nav_accordion">
	<li class="nav-item">
		<a class="nav-link" href="#"> Link name </a>
	</li>
	<li class="nav-item">
		<a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item1" href="#"> Submenu links <i class="bi small bi-caret-down-fill"></i> </a>
		<ul id="menu_item1" class="submenu collapse" data-bs-parent="#nav_accordion">
			<li><a class="nav-link" href="#">Submenu item 1 </a></li>
		    <li><a class="nav-link" href="#">Submenu item 2 </a></li>
		    <li><a class="nav-link" href="#">Submenu item 3 </a> </li>
		</ul>

	</li>
	<li class="nav-item">
		<a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item2" href="#"> More menus <i class="bi small bi-caret-down-fill"></i> </a>
		<ul id="menu_item2" class="submenu collapse" data-bs-parent="#nav_accordion">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
		    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
		    <li><a class="nav-link" href="#">Submenu item 6 </a></li>
		    <li><a class="nav-link" href="#">Submenu item 6 </a></li>
		</ul>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#"> Another page </a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#"> Demo link </a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#"> Menu item </a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#"> Something </a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#"> Other link </a>
	</li>
</ul>
</nav>
<!-- ============= COMPONENT END// ============== -->	
		</aside>
		<main class="col-lg-9">

<h6>Demo for sidebar nav menu links. <br> Based on Bootstrap 5 CSS framework.  </h6>
<p>For this demo page you should connect to the internet to receive files from CDN  like Bootstrap5 CSS, Bootstrap5 JS</p>

<p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

<a href="https://bootstrap-menu.com/detail-sidebar-nav-collapse.html" class="btn btn-success"> &laquo Back to tutorial or Download code</a>

		</main>
	</div>
</section>

</div><!-- container //  -->
    </body>
</html>