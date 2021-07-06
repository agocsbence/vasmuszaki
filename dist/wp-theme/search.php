<?php
/*
Template Name: Search Page
*/
get_header(); ?>

<section class="section nolinkdecor products search container">

    <div class="mt-4">

        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <h1 class="mt-5"><?php printf( __( 'Keresés: %s', 'szigetszerelveny' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </header>
            <div class="mt-4">
                <?php get_search_form(); ?>
            </div>

            <div class="row mt-4">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php include get_theme_file_path( '/includes/card.php' ); ?>

                <?php endwhile; ?>
            
            </div>


            <?php else : ?>

                <h3 class="mt-4">A keresés sajnos nem hozott eredményt :(</h3>

        <?php endif; ?>

    </div>
</section>

<?php get_footer();