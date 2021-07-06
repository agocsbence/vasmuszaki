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