<?php get_header();

$id = get_the_ID();

$start_category = get_the_category($id);

$parent_category_id = $start_category[0]->parent;
$parent_category = get_term($parent_category_id, 'category');

$master_category_id = $parent_category->parent;
$master_category = get_term($master_category_id, 'category');

?>

<section class="section single container">
    <nav class="mt-5" aria-label="breadcrumb">
        <ol class="breadcrumb nolinkdecor">
            <li class="breadcrumb-item"><a href="<?php echo get_permalink(20); ?>">Termékek</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo esc_url( get_category_link( $master_category->term_id )) ?>"><?php echo $master_category->name ?></a></li>
            <li class="breadcrumb-item"><?php echo $parent_category->name ?></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo esc_url( get_category_link( $start_category[0]->term_id )) ?>"><?php echo $start_category[0]->name ?></a></li>
        </ol>
      </nav>
    <div class="row mt-4">
        <div class="col-12 col-lg-4">
            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="background: #fff;" />
            </figure>
        </div>
        <div class="col-12 col-lg-8">
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>

            <?php if(get_field('muszaki_adatok')) : ?>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <strong>Műszaki adatok</strong>
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php if ( function_exists('slb_activate') ){
                                    $technical_content = get_field('muszaki_adatok');
                                    $content = slb_activate($technical_content);
                                    echo $content;
                                } ?>
                            </div>
                        </div>
                    </div>    
                </div>
            <?php endif; ?>

            <?php if(get_field('letoltheto_anyag')) : ?>
                <a class="btn btn-secondary mt-4" href="<?php the_field('letoltheto_anyag'); ?>" download role="button"><i class="bi bi-file-pdf"></i> <?php the_field('letoltheto_gomb_szoveg'); ?></a>
            <?php endif; ?>

        </div>
    </div>
    <div class="row mt-4">
        <h3>Kapcsolódó termékek</h3>
        <?php
            $loop = new WP_Query( array( 'post_type' => 'post', 'cat' => $start_category[0]->slug, 'posts_per_page' => 6 ) );
            
            while ( $loop->have_posts() ) : $loop->the_post();
                
                wpb_set_post_views(get_the_ID());
                include get_theme_file_path( '/includes/card.php' );
            
            endwhile; wp_reset_query();
        ?>

    </div>
</section>

<script>
    $(document).ready(function() {

        $('.accordion-collapse img').each(function(){
            var srcset=$(this).attr('srcset');
            var srcset_arr=srcset.split(', ');
            for(var key in srcset_arr){
                if(key==srcset_arr.length-1){
                var orig_image=(srcset_arr[key]).split(' ')[0];
                    console.log( $(this) );
                    $(this).wrap("<a class='popup-image' href='" +orig_image + "'></a>");
                }
            }
        });

        // $('.popup-image').magnificPopup({
        //     type: 'image',
        //     closeOnContentClick: true,
        //     mainClass: 'mfp-img-mobile',
        //     image: {
        //         verticalFit: true
        //     }
        // });
    });
</script>

<?php
include get_theme_file_path( '/includes/alert.php' );
get_footer();
