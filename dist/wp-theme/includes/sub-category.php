<?php $parent_category = get_category($start_category->parent) ?>
<?php $master_category = get_category($parent_category->parent) ?>

<section class="section single container">
    <nav class="mt-5" aria-label="breadcrumb">
        <ol class="breadcrumb nolinkdecor">
            <li class="breadcrumb-item"><a href="<?php echo get_permalink(20); ?>">Termékek</a></li>
            <li class="breadcrumb-item"><a href="<?php echo esc_url( get_category_link( $master_category->term_id )) ?>"><?php echo $master_category->name ?></a></li>
            <li class="breadcrumb-item"><?php echo $parent_category->name ?></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $start_category->name ?></li>
        </ol>
      </nav>
    <div class="row mt-4">
        <h1><?php echo $start_category->name ?></h1>
        <p><?php echo $start_category->description ?></p>
    </div>
    <div class="row mt-4">

        <?php
            $loop = new WP_Query( array( 'post_type' => 'post', 'orderby' => 'title', 'order' => 'ASC', 'cat' => $start_category->term_id ) );
            
            while ( $loop->have_posts() ) : $loop->the_post(); 
            
                include get_theme_file_path( '/includes/card.php' );
            
            endwhile; wp_reset_query();
        ?>

    </div>
</section>
<?php include get_theme_file_path( '/includes/alert.php' ); ?>