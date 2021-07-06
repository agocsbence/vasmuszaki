<?php get_header(); the_post(); ?>

<section class="section nolinkdecor container">
    <h1 class="mt-5"><?php the_title() ?></h1>
    <div class="row bg-white p-3 mt-4">
        
        <?php the_content() ?>

    </div>
</section>

<?php get_footer();
