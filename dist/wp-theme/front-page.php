<?php
/*

Template Name: Main Page

*/

get_header();

?>

<section class="section carousel">
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<!-- <div class="carousel-inner">

			<?php /*
				$categories = get_terms( 
					'category', array(
						'parent' => 0,
						'hide_empty' => false,
						'exclude' => 4
					)
				);
				$count = count($categories);
				$cnt = 0;

				for( $i=0; $i<$count; $i++ ) { 
					$cnt++;
					$category_link = get_category_link( $categories[$i]->{'term_id'} );
					$image = get_field('kep', $categories[$i]->taxonomy . '_' . $categories[$i]->term_id );

					if($cnt == 1) { ?>
						<div class="carousel-item active" data-bs-interval="5000" style="background-image: url('<?php echo $image?>');">
							<img src="<?php bloginfo('template_url') ?>/assets/img/fade.png" class="d-block w-100" alt="<?php echo $categories[$i]->{'name'} ?>">
							<div class="carousel-caption d-none d-md-block">
								<h1><?php echo $categories[$i]->{'name'} ?></h1>
							</div>
						</div>
					<?php } else { ?>
						<div class="carousel-item" data-bs-interval="5000" style="background-image: url('<?php echo $image?>');">
							<img src="<?php bloginfo('template_url') ?>/assets/img/fade.png" class="d-block w-100" alt="<?php echo $categories[$i]->{'name'} ?>">
							<div class="carousel-caption d-none d-md-block">
								<h1><?php echo $categories[$i]->{'name'} ?></h1>
							</div>
						</div>
					<?php }
				} */ ?>
		</div> -->
		<div class="carousel-inner">
			<!-- <img src="<?php // bloginfo('template_url') ?>/assets/img/logo.png" alt="Sziget Szerelvény" class="carousel-logo"> -->
			<a href="<?php echo get_home_url(); ?>/termekek/kazanok-es-keszulekek" class="carousel-item active" data-bs-interval="5000" style="background-image: url('<?php the_field('slider_kep_1', 503); ?>');">
				<img src="<?php bloginfo('template_url') ?>/assets/img/fade.png" class="d-block w-100" alt="Kazánok és készülékek">
				<div class="carousel-caption d-none d-md-block">
					<h1>Kazánok és készülékek</h1>
				</div>
			</a>
			<a href="<?php echo get_home_url(); ?>/termekek/szaniter-furdoszoba" class="carousel-item" data-bs-interval="5000" style="background-image: url('<?php the_field('slider_kep_2', 503); ?>');">
				<img src="<?php bloginfo('template_url') ?>/assets/img/fade.png" class="d-block w-100" alt="Szaniter-fürdőszoba">
				<div class="carousel-caption d-none d-md-block">
					<h1>Szaniter-fürdőszoba</h1>
				</div>
			</a>
			<a href="<?php echo get_home_url(); ?>/termekek/viz-gaz-futes" class="carousel-item" data-bs-interval="5000" style="background-image: url('<?php the_field('slider_kep_3', 503); ?>');">
				<img src="<?php bloginfo('template_url') ?>/assets/img/fade.png" class="d-block w-100" alt="Víz-gáz-fűtés">
				<div class="carousel-caption d-none d-md-block">
					<h1>Víz-gáz-fűtés</h1>
				</div>
			</a>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Előző</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Következő</span>
		</button>
		</div>
</section>

<section class="section" id="home-about">
	<?php
		$your_query = new WP_Query( 'pagename=rolunk' );
		while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
			
		<section class="section nolinkdecor container">
			<h1 class="mt-5"><?php the_title() ?></h1>
			<div class="row bg-white p-3 mt-4">
				
				<?php the_content() ?>
				
				<div class="about-icons row">
            
					<?php $szolgaltatasok = get_field('szolgaltatasok'); ?>
					
					<div class="col text-center"><img style="width: 4rem;" src="<?php echo $szolgaltatasok['ikon_1']; ?>" alt="<?php echo $szolgaltatasok['szolgaltatas_1']; ?>"><p><?php echo $szolgaltatasok['szolgaltatas_1']; ?></p></div>
					<div class="col text-center"><img style="width: 4rem;" src="<?php echo $szolgaltatasok['ikon_2']; ?>" alt="<?php echo $szolgaltatasok['szolgaltatas_2']; ?>"><p><?php echo $szolgaltatasok['szolgaltatas_2']; ?></p></div>
					<div class="col text-center"><img style="width: 4rem;" src="<?php echo $szolgaltatasok['ikon_3']; ?>" alt="<?php echo $szolgaltatasok['szolgaltatas_3']; ?>"><p><?php echo $szolgaltatasok['szolgaltatas_3']; ?></p></div>
					<div class="col text-center"><img style="width: 4rem;" src="<?php echo $szolgaltatasok['ikon_4']; ?>" alt="<?php echo $szolgaltatasok['szolgaltatas_4']; ?>"><p><?php echo $szolgaltatasok['szolgaltatas_4']; ?></p></div>
					<div class="col text-center"><img style="width: 4rem;" src="<?php echo $szolgaltatasok['ikon_5']; ?>" alt="<?php echo $szolgaltatasok['szolgaltatas_5']; ?>"><p><?php echo $szolgaltatasok['szolgaltatas_5']; ?></p></div>
				</div>

			</div>
		</section>

		<?php endwhile;
		wp_reset_postdata();
	?>
</section>

<section class="section nolinkdecor products container" id="home-popular">

<h1 class="mt-5">Legnépszerűbb termékeink</h1>
    <div class="row mt-4">

	<?php 
		$popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
		while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>

		<div class="col-sm-12 col-lg-3">
			<div class="card">
				<a href="<?php echo get_permalink(); ?>">
					<img src="<?php echo the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?></h5>
					</div>
				</a>
			</div>
		</div>

	
	<?php endwhile; ?>

	</div>
</section>

<?php get_footer(); ?>
