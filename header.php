<!DOCTYPE html>
<html>
<head>
<title><?php  bloginfo( 'name' ); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

	<div class="wrapper"><!-- This div gets closed in 'footer.php' -->
	<header>
		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		<h3 class="tagline"><?php bloginfo( 'description' ); ?></h3>

		<!-- this is the 'Primary' menu -->
		<nav class="header-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</nav>
	</header>
	<div class="container"><!-- This div gets closed in 'footer.php' -->