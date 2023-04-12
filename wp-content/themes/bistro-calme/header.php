<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?= get_template_directory_uri(); ?>/assets/css/styles.min.css" rel="stylesheet">

	<?php
	wp_enqueue_style(
		'font-awesome',
		'https://use.fontawesome.com/releases/v5.6.1/css/all.css'
	);

	wp_enqueue_script(
		'bistro-calme-main',
		get_template_directory_uri() . '/assets/js/main.js',
		['jquery'],
		filemtime(get_template_directory() . '/assets/js/main.js'),
		true
	);
	wp_enqueue_script('jquery');
	wp_head();
	?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header">
		<div class="header_inner">
			<div class="header_logo">
				<h1><a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/common/logo@2x.png" alt="BISTRO CALME"></a></h1>
			</div>

			<div class="header_desc">
				<p><?php bloginfo('description'); ?></p>
			</div>

			<?php get_search_form(); ?>
		</div>

		<div class="header_links">
			<nav class="gnav">
				<?php
				wp_nav_menu([
					'menu' => 'global-navigation',
					'container' => null,
					'menu_class' => ''
				]);
				?>
			</nav>

			<ul class="header_sns">
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			</ul>
		</div>

		<svg class="header_menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
			<defs>
				<clipPath id="clip-path">
					<rect width="30" height="30" fill="none" />
				</clipPath>
			</defs>
			<g clip-path="url(#clip-path)">
				<rect class="header_border header_border-1" width="30" height="2" transform="translate(0 0)" />
				<rect class="header_border header_border-2" width="30" height="2" transform="translate(0 10)" />
				<rect class="header_border header_border-3" width="30" height="2" transform="translate(0 20)" />
			</g>
		</svg>
	</header>