<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8" />
	<title><?php if(is_front_page() || is_home()){ echo get_bloginfo('name'); } else{ echo wp_title(''); echo ' | '; echo get_bloginfo('name'); }?></title>
	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
	
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/all.min.css" type="text/css" /><!-- font awesome -->
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/state.css?v=1.0.7" type="text/css" />
	
	<!-- <script defer src="<?php // bloginfo('template_url') ?>/assets/js/scripts.js?v=1.0.2"></script> -->

	<link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
	<link href="webclip.png" rel="apple-touch-icon" />
	<?php wp_head(); ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script defer src="<?php bloginfo('template_url') ?>/assets/js/jquery.magnific-popup.min.js"></script>
</head>

<body <?php body_class(); ?>>
	<?php 
	$akcio = get_field('akcio', 503);
	$kapcsolo = $akcio['kapcsolo'];
	
	if ($kapcsolo): ?>
		
		<div class="akcio" style="color: <?php echo $akcio['szovegszin']; ?>; background-color: <?php echo $akcio['hatterszin']; ?>; padding: .6rem; text-align: center;"><?php echo $akcio['akcio_szovege']; ?></div>
		
	<?php endif; ?>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
					Sziget Szerelvény Kft.
					<!-- <img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="" width="50" height="50" class="d-inline-block align-top"> -->
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mb-2 px-lg-5 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo get_permalink(20); ?>">Termékek</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo get_permalink(24); ?>">Rólunk</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo get_category_link(4); ?>">Márkák</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo get_permalink(26); ?>">Kapcsolat</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><span class="badge bg-warning text-dark">Új üzletünk</span></a>
						</li>
					</ul>
					<form role="search" method="get" id="searchform" class="d-flex searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div class="input-group ">
							<!-- <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label> -->
							<input class="form-control me-2" type="search" placeholder="Keresés" aria-label="Keresés" value="<?php echo get_search_query(); ?>" name="s" id="s">
							<button class="btn btn-outline-light" type="submit" id="searchsubmit" value="Keresés">Keresés</button>
						</div>
					</form>
				</div>
			</div>
		</nav>
	</header>
	<main>