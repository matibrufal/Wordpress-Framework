<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<title><?php if (is_category()) {
		echo 'Category Archive for '; single_cat_title(); echo ' - '; bloginfo( 'name' );
	} elseif (is_tag()) {
		echo 'Tag Archive for '; single_tag_title(); echo ' - '; bloginfo( 'name' );
	} elseif (is_archive()) {
		echo ' Archive'; wp_title(''); echo ' - '; bloginfo( 'name' );
	} elseif (is_search()) {
		echo 'Search for '. wp_specialchars($s) .' - '; bloginfo( 'name' );
	} elseif (is_home()) {
		bloginfo('name');
	}  elseif (is_404()) {
		echo 'Error 404 Not Found - '; bloginfo( 'name' );
	} elseif (is_single()) {
		wp_title('');
	} else {
		echo wp_title(''); echo ' - '; bloginfo( 'name' );
	} ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<!-- Favicons -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-32x32.png">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon.png">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header"><div class="container">
	
	<a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
		<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>">
	</a>

	<div class="menu-icon">
		<span class="menu-line"></span>
		<span class="menu-line"></span>
		<span class="menu-line"></span>
	</div>

	<!-- Navigation -->
	<nav class="navigation"><div class="menu-container">

		<ul class="menu">
			<?php wp_nav_menu(array('menu' => 'header', 'container' => '', 'items_wrap' => '%3$s')); ?>
			<?php if (current_user_can('edit_posts')): ?>
			<li><a href="<?php echo esc_url(home_url('/')); ?>/wp-admin" rel="nofollow">Panel de control</a></li>
			<?php endif; ?>
		</ul>

	</div></nav>
	<!-- End Navigation -->

</div></header>

<div class="main">