<?php
/*

Template Name: Termékek

*/

get_header();

?>

<section class="section nolinkdecor products container">

    <h1 class="mt-5">Termékek</h1>
    <div class="row mt-4">
        
        <?php
            $categories = get_terms( 
                'category', array(
                    'parent' => 0,
                    'hide_empty' => false,
                    'exclude' => 4
                )
            );
            $count = count($categories);

            for( $i=0; $i<$count; $i++ ) { 

                $category_link = get_category_link( $categories[$i]->{'term_id'} );
                $image = get_field('kep', $categories[$i]->taxonomy . '_' . $categories[$i]->term_id ); ?>

                <div class="col-sm-12 col-lg-4">
                    <a href="<?php echo esc_url( $category_link ); ?>" class="card">
                        <img src="<?php echo $image?>" class="card-img-top" alt="<?php echo $categories[$i]->{'name'} ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $categories[$i]->{'name'} ?></h5>
                        </div>
                    </a>
                </div>
        <?php } ?>

    </div>
</section>

<?php get_footer(); ?>
