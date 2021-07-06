<section class="section products nolinkdecor container">
	<nav class="mt-5" aria-label="breadcrumb">
		<ol class="breadcrumb nolinkdecor">
			<li class="breadcrumb-item"><a href="<?php echo get_permalink(20); ?>">Termékek</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo $start_category->name ?></li>
		</ol>
	</nav>
	<div class="row mt-2">

		<?php

		$args = array('parent' => $cat_id, 'hide_empty' => false);
		$categories = get_categories( $args );
		foreach($categories as $category) { 
			$image = get_field('kep', $category->taxonomy . '_' . $category->term_id );
			if($image == '') {
				$image = 'https://placehold.it/640x360';
			} ?>

			<div class="col-sm-12 col-lg-3 g-3">
				<div class="card nolinkdecor">
					<a href="">
						<img src="<?php echo $image ?>" class="card-img-top" alt="<?php echo $category->name ?>">
						<div class="card-body">
							<h5 class="card-title"><?php echo $category->name ?></h5>
						</div>
					</a>
					<ul class="list-group nolinkdecor list-group-flush">
						<?php
							$parent_category = $category;
							$parent_cat_id = $parent_category->term_id;
							$sub_args = array('parent' => $parent_cat_id, 'hide_empty' => false);
							$sub_categories = get_categories( $sub_args );
							foreach($sub_categories as $sub_category) { ?>
								<?php // var_dump($sub_category); ?>
								<li class="list-group-item"><a href="<?php echo esc_url( get_category_link( $sub_category->term_id )) ?>"><?php echo $sub_category->name ?></a></li>
							<?php }
						?>
					</ul>
				</div>
			</div>

		<?php } ?>

	</div>
</section>